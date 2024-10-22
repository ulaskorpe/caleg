<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Sizes;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    public function putShoppingCart(Request $request, $product_slug)
    {
        // todo: add validator
        $shoppingCart = Session::get('shoppingCart');
        if ($shoppingCart == null) {
            $shoppingCart = [
                'data' => [],
                'total' => 0,
            ];
        }

        $product = Products::where('slug', $product_slug)->first();
        $size = Sizes::where('id', $request->size_id)->first();
        $type = Types::where('id', $request->type_id)->first();
        $quantity = $request->quantity;
        $finance = new FinanceController();
        $price = $finance->calculateProductPrice($request->size_id, $request->type_id);

        $data = [
            'product' => $product,
            'type' => $type,
            'size' => $size,
            'quantity' => $quantity,
            'price' => $price
        ];

        $shoppingCart['data'][sizeof($shoppingCart['data'])] = $data;
        $shoppingCart = [
            'data' => $shoppingCart['data'],
            'total' => $this->calculateTotal($shoppingCart['data']),
        ];

        Session::put('shoppingCart', $shoppingCart);
        return redirect()->back();
    }

    public function removeShoppingCart($product_slug, $type_id, $size_id)
    {
        $shoppingCart = Session::get('shoppingCart');
        if ($shoppingCart == null) {
            return redirect()->back();
        }

        foreach ($shoppingCart['data'] as $key => $item) {
            if ($item['product']->slug == $product_slug && $item['type']->id == $type_id && $item['size']->id == $size_id) {
                unset($shoppingCart['data'][$key]);
            }
        }

        $shoppingCart = [
            'data' => $shoppingCart['data'],
            'total' => $this->calculateTotal($shoppingCart['data']),
        ];

        Session::put('shoppingCart', $shoppingCart);
        return redirect()->back();
    }

    public function updateShoppingCart($product_slug, $type_id, $size_id, $quantity)
    {
        $shoppingCart = Session::get('shoppingCart');
        if ($shoppingCart == null) {
            return redirect()->back();
        }

        foreach ($shoppingCart['data'] as $key => $item) {
            if ($item['product']->slug == $product_slug && $item['type']->id == $type_id && $item['size']->id == $size_id) {
                $shoppingCart['data'][$key]['quantity'] = $quantity;
            }
        }

        $shoppingCart = [
            'data' => $shoppingCart['data'],
            'total' => $this->calculateTotal($shoppingCart['data']),
        ];

        Session::put('shoppingCart', $shoppingCart);
        return redirect()->back();
    }

    public function calculateTotal($data)
    {
        $total = 0;
        if ($data != null) {
            foreach ($data as $item) {
                $total += $item['price'] * $item['quantity'];
            }
        }
        return $total;
    }

    public function clearShoppingCart()
    {
        Session::forget('shoppingCart');
        return redirect()->back();
    }
}
