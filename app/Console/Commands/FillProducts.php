<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Http\Controllers\Helpers\GeneralHelper;
use App\Models\Products;
use App\Models\ProductVariant;
use App\Models\WP\Post;
use App\Models\WP\PostMeta;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;

use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class FillProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill-products';

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
        $posts = [];


        // $count = Post::where('post_type', 'product')
        // ->where('post_title','<>','')
        // ->distinct('post_title')
        // ->count('post_title');

    //return $count;

       //  $vars = Post::where('post_type','=','product_variation')->count();
       //  return $vars;

       $data = Post::where('post_type','=','product')->get();//->whereIn('id',[13039,11185])->limit(10)->get();

       foreach($data as $item){
        if($item['post_title']){
             $slug = GeneralHelper::fixName($item['post_title']);
             $p= Products::where('slug','=',$slug)->first();
            if(empty($p)){
                $p = new Products();
               // die($slug);
            }
                $p->slug = $slug ;
                $p->name = $item['post_title'];
                $p->title = $item['post_title'];
                $p->description = $slug;
                $p->thumbnail =$slug;
                $p->photo =$slug;
                $p->category_id =$slug;
                $p->type_id ='';
                $p->price =100;
                $p->status = 1;
                $p->views = 0;
                $p->language_id =0;
                $p->post_id =  $item['ID'];
                $p->save();
        echo  "<b> .". $item['ID'].":". $item['post_title']."</b><br>";

         //   $variants = [];

     //   $vars = Post::where('post_type','=','product_variation')->where('post_parent','=',$item['ID'])->get();
        // foreach($vars as $var){
        //     $this->make_variant($var,$p['id']);
        //     $variants[]=['var_id'=>$var['ID'],'var_title'=>$var['post_title'],'meta_data'=>$this->show_metadata($var['ID'])];
        //     echo "-----".  $var['ID'].":". $var['post_title']."<br>";
        //     // create variant here

        // }


       // $posts[]=['item_id'=>$item['ID'],'title'=>$item['post_title'],'meta_data'=>$this->show_metadata($item['ID']),'variants'=>$variants];

        }
    }
}

}
