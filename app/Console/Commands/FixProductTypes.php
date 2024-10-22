<?php

namespace App\Console\Commands;

use App\Models\CatalogImage;
use App\Models\Products;
use App\Models\Types;
use Illuminate\Console\Command;


class FixProductTypes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix-product-types';

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
        $dz = explode("-",$img);
        return trim(str_replace(".jpg","",str_replace(".jpeg","",trim($dz[count($dz)-1]))));
     }

     private function findSize($slug){

        $dz = explode("-",str_replace("_","",$slug));
        return $dz[count($dz)-1];

     }

    public function handle()
    {
      //  $types = Types::pluck('name')->toArray();
        $types = Types::all();
        $t_array = [];
        foreach($types as $t ){
            $t_array[$t['name']]  = $t['id'];
        }
        // foreach ($t_array as $key => $value) {
        //     echo "Key: $key; Value: $value" . PHP_EOL;
        // }

        // die();

        $products = Products::with('variants')->skip(1000)->limit(500)->get();
        $sizes = [];
        foreach($products as $product){
            $product->types()->detach();
        //    $images = CatalogImage::where('image','LIKE','%'.$product['slug'].'%')->get();
            echo $product['slug'].PHP_EOL;
            $types_attach = [];
            foreach($product->variants()->get() as $var){
              //  echo $this->findSize( $var['slug']).PHP_EOL;
                $size = $this->findSize($var['slug']);
                if(!in_array( $t_array[$size] , $types_attach)){
                     echo $t_array[$size].PHP_EOL;
                   $types_attach[]= $t_array[$size];
                }
            }
            $product->types()->attach($types_attach);
            $product->type_id = implode(",",$types_attach);
             $product->save();
        }

        // foreach($sizes as $s){
        //     $type  = Types::where('name','=',$s)->first();
        //     if(empty($type)){
        //         $dz = explode("x",$s);
        //     $type = new Types();
        //     $type->name = $s;
        //     $type->price = $dz[0]*$dz[1];
        //     $type->save();
        //      echo $s.PHP_EOL;
        //     }
        // }
    }
}
