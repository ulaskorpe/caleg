<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\GeneralHelper;
use App\Models\Products;
use App\Models\ProductVariant;
use App\Models\WP\Post;
use App\Models\WP\PostMeta;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Schema;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
class TransferController extends Controller
{

    use HttpResponses;

    public function post_meta(){

        $data = PostMeta::where('post_id','=','2')->first();

        return  $this->success([$data],"" ,200);
    }

    private function show_metadata($id){
        $metadata  = [];
        if($id>0){

         $data = PostMeta::where('post_id','=',$id)->get();
         //echo "<b>METADATA</b><br>";

        foreach($data as $item){
            $metadata[] = ['meta_id'=>$item['meta_id'],'meta_key'=>$item['meta_key'],'meta_value'=>$item['meta_value']];
                //echo "***".$item['meta_id'].":".$item['meta_key'].":".$item['meta_value']."<br>";
        }
    }
    return $metadata;
    }


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

    public function posts(){
         $posts = [];


         $count = Post::where('post_type', 'product')
         ->where('post_title','<>','')
         ->distinct('post_title')
         ->count('post_title');

     //return $count;

        //  $vars = Post::where('post_type','=','product_variation')->count();
        //  return $vars;

    //    $data = Post::where('post_type','=','product')->whereIn('id',[13039,11185])->limit(10)->get();
        //$data = Post::where('post_type','=','product')->skip(1500)->limit(500)->orderBy('ID')->get();
        // $k=1;

         $products = Products::skip(0)->limit(500)->orderBy('id')->get();

        foreach($products as $product){
                echo $k.".". $product['id'].":". $product['name']."<br>";
                $k++;
                $vars = Post::where('post_type','=','product_variation')->where('post_parent','=',$product['post_id'])->get();

                foreach($vars as $var){
                $this->make_variant($var,$product['id']);
          //      $variants[]=['var_id'=>$var['ID'],'var_title'=>$var['post_title'],'meta_data'=>$this->show_metadata($var['ID'])];
                echo "-----".  $var['ID'].":". $var['post_title']."<br>";
                // create variant here

            }

        // }

    //    Products::truncate();
     //   ProductVariant::truncate();
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
                    $p->type_id =$slug;
                    $p->price =100;
                    $p->status = 1;
                    $p->views = 0;
                    $p->language_id =0;
                    $p->post_id =  $item['ID'];
                    $p->save();
        //    echo  "<b>".$k.".". $item['ID'].":". $item['post_title']."</b><br>";

                $variants = [];

         //   $vars = Post::where('post_type','=','product_variation')->where('post_parent','=',$item['ID'])->get();
            // foreach($vars as $var){
            //     $this->make_variant($var,$p['id']);
            //     $variants[]=['var_id'=>$var['ID'],'var_title'=>$var['post_title'],'meta_data'=>$this->show_metadata($var['ID'])];
            //     echo "-----".  $var['ID'].":". $var['post_title']."<br>";
            //     // create variant here

            // }


            $posts[]=['item_id'=>$item['ID'],'title'=>$item['post_title'],'meta_data'=>$this->show_metadata($item['ID']),'variants'=>$variants];
            $count++;
            }
        }
        //dd($posts);
    //    return view('posts',['posts'=>$posts]);
     //   return  $this->success([$data],"" ,200);
    }



    public function show_files(){


        $path = public_path('assets/products/');



        $directoryPath = public_path('test'); // Replace with your actual directory path

        // Get all files in the directory
        $files = File::files($directoryPath);

        // Print the list of files
        foreach ($files as $file) {
            $f = $file->getFilename();

            $image = ProductImage::with('product_variant')->where('image','LIKE','%'.$f.'%')->first();
            if(!empty($image)){

            }else{
                echo  $f. 'BULUNAMADI<br>';
            }
          //
        }

        //  $images =['18-yasindan-kucukler-giremez-uyari-levhasi-100x100.jpg','18-yasindan-kucukler-giremez-uyari-levhasi-228x228.jpg','18-yasindan-kucuklerin-girmesi-yasaktir-uyari-levhasi-400x400.jpg'];

        // foreach($images as $img){
        //     $sourcePath = public_path('test/'.$img);
        //     if (!File::exists($sourcePath)) {
        //         echo 'Source file does not exist!'.$sourcePath."<br>";
        //     } else {
        //         echo 'Source file exists. Proceeding to copy...'."<br>";
        //         File::copy($sourcePath,  $path."/".$img);

        //     }
        // }
         die();
        $count = 0;
        $products = Products::with('variants','variants.images')->skip(0)->limit(5)->get();
        foreach($products as $product){

           $count++;


           $path = public_path('assets/products/'.$product['slug']);
                   if (!File::exists($path)) {
                            File::makeDirectory($path, 0755, true);
                        }
        //   echo $product['id']."::".$product['name'].PHP_EOL;
           foreach($product->variants()->get() as $var){
            //   echo $var['name'].PHP_EOL;
          //  $types_attach = [];
                   foreach($var->images()->get() as $img){
                    $dz  = explode("/",$img['image']);



                  //  $sourcePath = '/home/vagrant/code/caleg/public/catalog/'.$img['image'];

                   $sourcePath = public_path('test/'.$dz[count($dz)-1]); // Replace with your image file name

                //    //     echo $sourcePath."<br>";
                //    $images[]= 'catalog/'.$img['image'];
                //  //   copy($sourcePath, $path."/".$img['image']);



                     if (!File::exists($sourcePath)) {
                        echo 'Source file does not exist!'.$sourcePath."<br>";
                    } else {
                        echo 'Source file exists. Proceeding to copy...'."<br>";
                        File::copy($sourcePath,  $path."/".$img['image']);

                    }

                     //sudo chown -R nginx:nginx public/catalog

                     //  echo "IMG".$img['image'].PHP_EOL;
                   }
           }


           // echo $path.PHP_EOL;

        }
      //  return view('show_images',['images'=>$images]);
    }
    public function table_columns($key="something to search"){    //DB search

        // $columns = Schema::getColumnListing($table);
        // dd($columns);

        // if($db=='guvenlik'){
        //     $pre = 'Tables_in_guvenlik_db';
        //     $conn = 'mysql2';

        // }else{
        //     $pre = 'Tables_in_safetysigns_db';
        //     $conn = 'mysql';
        // }
        $tables = DB::connection('mysql2')->select('SHOW TABLES');

        $return_tables = [];

        foreach( $tables as $table){

             $query = DB::connection('mysql2')->table($table->Tables_in_guvenlik_db);

            $columns = DB::connection('mysql2')->select("SHOW COLUMNS FROM  `". $table->Tables_in_guvenlik_db."`");
            foreach($columns as $col){

                if(substr($col->Type,0,7) == 'varchar' ||  in_array($col->Type,['longtext','text','tinytext','mediumtext'])){
                    $query->orWhere($col->Field, 'like', '%' . $key . '%');
                }elseif(substr($col->Type,0,7) == 'decimal' || in_array($col->Type,['bigint unsigned','bigint','int','double','int unsigned','tinyint unsigned'])){
                     $query->orWhere( $col->Field, $key);


               }



             }


       //
             $resultCount = $query->count();
             if($resultCount>0){
                $return_tables[]=['table'=>$table->Tables_in_guvenlik_db ,'count'=>$resultCount];
             }

           //  echo "<hr>";
        }


      //  return $return_tables;


    return view("search",['tables'=>$return_tables,'key'=>$key]);
//dd($columns); // Dumps the columns to the screen
        // foreach($columns as $col){
        //    // echo $col['Field'].":".$col['Type']."<br>";
        //    echo $col->Field.":".$col->Type."<br>";
        // }
    }


    public function show_results($table,$key){
        $query = DB::connection('mysql2')->table($table);
        $columns = DB::connection('mysql2')->select("SHOW COLUMNS FROM  `". $table."`");
        $results_array = [];
        $cols = [];
        foreach($columns as $col){
            $cols[]=$col->Field;
            if(substr($col->Type,0,7) == 'varchar' ||  in_array($col->Type,['longtext','text','tinytext','mediumtext'])){
                $query->orWhere($col->Field, 'like', '%' . $key . '%');
            }elseif(substr($col->Type,0,7) == 'decimal' || in_array($col->Type,['bigint unsigned','bigint','int','double','int unsigned','tinyint unsigned'])){
                 $query->orWhere( $col->Field, $key);


           }
                $i=1;
                $results = $query->get();

         //     echo "<b>Field :". $field."</b><br>";

             foreach($results as $result){
                $txt = "";

                $i++;
                foreach($columns as $col){
                    $field = $col->Field;
                    $txt.=$field.":".substr($result->$field,0,200)."<hr>";
                }
                $results_array[]=$txt;

   //        dd($result[$col->Field][0]);
             //  echo $result->$field."<br>";
              //echo "findsmt in $table->Tables_in_guvenlik_db<br>";
             }


         }///cols
         $results = json_decode($results, true);


      // return $results_array;
        return view('results',['table'=>$table,'key'=>$key,'results'=>$results_array,'cols'=>$cols]);
    }

}



