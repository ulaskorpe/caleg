<?php

namespace App\Console\Commands;

use App\Models\Products;
use App\Models\ProductVariant;
use App\Models\Types;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class FillProductImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill-product-images';

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
    public function handle()
    {

        $types = Types::pluck('name')->toArray();

        // $vars = ProductVariant::with('images')->skip(0)->limit(500);
        // foreach($vars as $var){

        // }

        // die();
        $count = 1;
         $products = Products::with('variants','variants.images')->skip(0)->limit(50)->get();
         foreach($products as $product){
            echo $count.PHP_EOL;
            $count++;


            $path = public_path('assets/products/'.$product['slug']);
                    if (!File::exists($path)) {
                // Create the directory
                File::makeDirectory($path, 0755, true);
            }
            echo $product['id']."::".$product['name'].PHP_EOL;
            foreach($product->variants()->get() as $var){
             //   echo $var['name'].PHP_EOL;
           //  $types_attach = [];
                    foreach($var->images()->get() as $img){

                //         $type = $this->findType($img['image']) ;
                //   if(!in_array($type,$types)){
                // //echo $image['image'].PHP_EOL;
                // $t = new Types();
                // $t->name  = $type;
                // $t->price = 300;
                // $t->save();
                // $types[] = $type;

                // }



                $sourcePath = public_path('catalog/'.$img['image']); // Replace with your image file name


                // Check if the source file exists

                    // Copy the file to the new location
                   copy($sourcePath, $path."/".$img['image']);



                      //  echo "IMG".$img['image'].PHP_EOL;
                    }
            }


            // echo $path.PHP_EOL;

         }
    }
}
