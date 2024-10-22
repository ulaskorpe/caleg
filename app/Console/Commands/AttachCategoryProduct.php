<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\ProductImage;
use App\Models\Products;
use App\Models\ProductVariant;
use Illuminate\Console\Command;

class AttachCategoryProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'attach-category-product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $products = Products::with('variants')->get();
        foreach($products as $product){
            echo $product->name.PHP_EOL;

                $array = [];
            foreach($product->variants()->get() as $var){
                $arr = explode(",",$var['category_id']);
                foreach($arr as $cat){
                    if($cat!=''){
                        if(!in_array($cat,$array)){
                                $array[]=$cat;
                        }
                    }
                }

            }
            $product_cats= implode(",",$array) ;
           // $product->category_id = $product_cats;
            //  $product->save();
        }

    //    $cats = Category::pluck('slug')->toArray();
    //    foreach( $cats as $cat){
    //     $images = ProductImage::where('image','LIKE','%'.$cat.'%')->pluck('product_variant_id')->toArray();
    //     $vars = ProductVariant::whereIn('id',$images)->get();
    //     echo $cat.PHP_EOL;
    //     foreach($vars as $item){
    //         $item->category_id = $item->category_id.$cat.",";
    //         $item->save();
    //         echo $item->name.PHP_EOL;
    //     }
    //    }
    }
}
