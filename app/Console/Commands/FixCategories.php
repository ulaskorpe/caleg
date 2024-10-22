<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;
use App\Models\Products;
use App\Models\Category;
use App\Models\Types;

class FixCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    private function findType($img){

        $dz = explode("-",str_replace(".jpg","",str_replace(".jpeg","",$img)));
        $name= $dz[count($dz)-1];
        $type = Types::where('name','=',$name)->first();
        if(empty($type)){
            $type = new Types();
            $type->name = $name;
            $type->price = 100;
            $type->save();

        }
        return $type->id ;

    }
    public function handle()
    {
        $products = Products::with('variants')->skip(1000)->limit(500)->get();
        $count = 1;
        foreach($products as $product){
            $type_array = [];
           echo $count.":". $product['name'].PHP_EOL;
           $product->categories()->detach();
           $directory = public_path('assets/products/'.$product['slug']);

           // Get all files in the specified directory
           $files = File::allFiles($directory);

           // Display files
           foreach ($files as $file) {
            $typeid= $this->findType($file->getFilename());
            if(!in_array($typeid,$type_array)){
                $type_array[]=$typeid;
                echo  $typeid. PHP_EOL;
            }

           }

                $txt = implode(",",$type_array);
                $product->categories()->attach($type_array);
                $product->category_id = $txt ;
                $product->save();

                // foreach($product->variants()->get() as $var){
                //     echo $var['category_id'].PHP_EOL;
                //     $var_array = [];
                    // $new_array = explode(",",$var['category_id']);
                    //     foreach($new_array as $item){
                    //         if(!empty($item) && !in_array($item,$var_array)){
                    //             $c  = Category::where('slug','=',$item)->first();
                    //             $var_array[]=$c['id'];
                    //         }
                    //     }
                          //  echo "V:".$txt."::::" .$var['category_id'].PHP_EOL;
             //  }/// variants
                // $txt = implode(",",$var_array);
                // $product->categories()->attach($var_array);
                // $product->category_id = $txt ;
                // $product->save();
                $count++;
             //   echo $txt.PHP_EOL;

             //$new = str_replace(",0","",$product['category_id']);
             //echo $new.PHP_EOL;
           //  $this->line("zzz");
            // $product->category_id = $new;
            // $product->save();
                // $cat_array = explode(",",$product['category_id']);
                // foreach($cat_array as $cat){
                //     $c = Category::where('name','=',trim($cat))->first();
                //     $txt="";
                //     $new_array  =  [];
                //     if(!empty($c)){
                //         $txt.=$c['id'].",";
                //         $new_array[]=$c['id'];
                //     }
                //     $txt.="0";
                //     echo $txt.PHP_EOL;
                //     $product->category_id = $txt;
                //     $product->save();
                //     $product->categories()->detach();
                //     $product->categories()->attach($new_array);
                // }
        }
    }
}
