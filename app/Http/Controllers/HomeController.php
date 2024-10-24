<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail;
use App\Models\Category;
use App\Models\Location;
use App\Models\Products;
use App\Models\Sizes;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Slider;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function data(){
        return view(view: 'myview');
    }


    public function index(){
            $locations = Location::with('products','products.categories')->orderBy('rank')->where('show','=',1)->get();


           

        return view("marketpro.index",['locations'=>$locations,
            'sliders'=>Slider::where('location','=','top')->orderBy('order')->get(),
            'bottom_sliders'=>Slider::where('location','=','bottom')->orderBy('order')->get(),
        
        ]);
    }

    public function _index()
    {

        // $data = Cache::get('public_data');
        // return $data;

        $middle = Products::where('location','=','middle')->orderBy('order')->get();
        $products_middle = [];
        foreach($middle as $p){
            $products_middle[$p['order']] = $p;
        }


        $data['products_top'] = Products::where('location','=','top')->orderBy('order')->get();

        $data['products_middle'] = $products_middle;



    // return response()->json($data['products']);
         return view('index', $data);

    }

    public function contact()
    {
        // $data['generalset'] = $this->General_Settings;
        // $data['mailset'] = $this->Mail_Settings;
        // return view('contact', $data);
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function shop($slug = null)
    {
        if ($slug == null) $category_id = 0;
        else $category_id = Category::where('slug', $slug)->first()->id;

        // Should use relation for Products and Category (many to many)
        $products = Products::all();
        $mpr = collect($products)->map(function ($products) use ($category_id) {
            return collect(json_decode($products['category_id']))->contains($category_id) ? $products : null;
        });
        // *****

        $data['products'] = $mpr;
        $data['slug'] = $slug;
        return view('shop', $data);
    }

    public function product($product_slug, $category_slug)
    {
        $product = Products::where('slug', $product_slug)->first();
        $category = Category::where('slug', $category_slug)->first();
        $type = Types::whereIn('id', json_decode($product->type_id))->get();
        $size = Sizes::whereIn('id', $category->sizes)->get();

        $data['product'] = $product;
        $data['types'] = $type;
        $data['sizes'] = $size;

        return view('product', $data);
    }

    public function contactTestQue()
    {

        $data = [
            'sender_name' => "SEIF SENDER",
            'sender_email' => "saifzoghby@yahoo.com",
            'title' => "Contact Us",
            'body' => "Hello her my message!.",
        ];
        dispatch(new SendMail($data));

        return redirect()->back()->with(['success' => "Front Style Updated Successfully"]);
    }
}
