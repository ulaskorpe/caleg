<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    public function product_detail($slug,$id){
        $product = Products::find($id);
            return $product['name'];
    }
}
