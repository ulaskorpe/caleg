<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Products;
use App\Models\ProductVariant;
use App\Models\WP\Post;
use App\Http\Controllers\Helpers\GeneralHelper;
class FillProductVariants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill-product-variants';
    private function make_variant($item,$product_id){


        $slug = GeneralHelper::fixName($item['post_title'],);
                    $p= ProductVariant::where('slug','=',$slug)->first();
                    if(empty($p)){
                        $p = new ProductVariant();
                    }
                        $p->slug = $slug ;
                        $p->name = $item['post_title'];
                        $p->title = $item['post_title'];
                        $p->description = $slug;
                        $p->thumbnail =$slug;
                        $p->photo =$slug;
                        $p->category_id =$slug;
                        $p->type_id =$slug;
                        $p->price =100;
                        $p->status = 1;
                        $p->views = 0;
                        $p->language_id =0;
                        $p->product_id =  $product_id;
                        $p->save();
    }
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
        $products = Products::skip(500)->limit(500)->orderBy('id')->get();
        $k=1;
        foreach($products as $product){
                echo $k.".". $product['id'].":". $product['name'].PHP_EOL;
                $k++;
                $vars = Post::where('post_type','=','product_variation')->where('post_parent','=',$product['post_id'])->get();

                foreach($vars as $var){
                $this->make_variant($var,$product['id']);
          //      $variants[]=['var_id'=>$var['ID'],'var_title'=>$var['post_title'],'meta_data'=>$this->show_metadata($var['ID'])];
                echo "-----".  $var['ID'].":". $var['post_title'].PHP_EOL;
                // create variant here

            }
    }

    }
}
