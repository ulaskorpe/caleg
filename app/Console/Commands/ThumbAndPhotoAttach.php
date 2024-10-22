<?php

namespace App\Console\Commands;

use App\Models\Products;
use App\Models\ProductVariant;
use App\Models\Types;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use PHPUnit\Event\Runtime\PHP;

class ThumbAndPhotoAttach extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'thumb-and-photo-attach';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */

     private function calculateSize($img){
        $array = explode("-",$img);
         $size = str_replace(".jpg","", str_replace(".jpeg","", $array[count($array)-1]));
         return $size;
     }

    private function findThumbAndPhoto($images){
        $thumb = 5000*5000;
        $photo =0 ;
        $selected_thumb = "";
        $selected_photo = "";
        foreach($images as $img){

            $sz = $this->calculateSize($img);
            $dz =explode("x",$sz);
            $calculated  = ($dz[0]*$dz[1]);
       //     echo  $sz ."=".$calculated.PHP_EOL ;

            if ($thumb > $calculated ){
                $thumb  = $calculated;
                $selected_thumb = $img;
            }//? $calculated : $thumb;


            if ($photo < $calculated ){
                $photo  = $calculated;
                $selected_photo = $img;
            }//? $calculated : $thumb;


        }

        return ['thumb'=>$selected_thumb,'photo'=>$selected_photo];

        // echo "th".$thumb.":".$selected_thumb.PHP_EOL;
        // echo "photo".$photo.":".$selected_photo.PHP_EOL;

    }

    public function handle()
    {
            $types = Types::all();
            $type_array =[];
            foreach($types as $type){
               // echo $type['name'].",";
               $type_array[$type['name']] = $type['id'];
            }


        $products = Products::skip(1500)->limit(500)->get();

foreach($products as $product){

         $directoryPath = public_path('assets/products/'.$product['slug']); // Replace with your actual directory path
         echo $product['name'].PHP_EOL;






        if (!File::exists($directoryPath)) {
    // Create the directory
          File::makeDirectory($directoryPath, 0755, true);
        }else{

        // // Get all files in the directory
          $files = File::files($directoryPath);
                $array = [];
               foreach ($files as $file) {
                    $f = $file->getFilename();
                  //  echo $f.PHP_EOL;
                    $array[]= $this->calculateSize( $f);
                 }
                 $product_types = [];
                 foreach($array as $item){
                    echo $item.PHP_EOL;
                    echo $type_array[$item].PHP_EOL;
                    $product_types[]=$type_array[$item];
                 }
                 $product->types()->detach();
                 $product->types()->attach($product_types);

                //  $result = $this->findThumbAndPhoto($array);
                //  if(!empty($result['photo'])){
                //     $product->photo  = $result['photo'];
                //     $product->thumbnail  = $result['thumb'];
                //     $product->save();
                //  }
                //  echo "TH". $result['thumb'].PHP_EOL;
                //  echo "PH".$result['photo'].PHP_EOL;

                }///dir exists
}
              // foreach ($files as $file) {
        //     $f = $file->getFilename();

        //     $ci = new CatalogImage();
        //     $ci->image = $f;
        //     $ci->save();
        //     // $image = ProductImage::with('product_variant')->where('image','LIKE','%'.$f.'%')->first();
        //     // if(!empty($image)){

        //     // }else{
        //     //     echo  $f. 'BULANAMADI<br>';
        //     // }
        //   //
        // }

        // $variants = ProductVariant::with('images')->where('thumbnail','=','thumb')->skip(0)->limit(10000)->get();
        // foreach($variants as $var){
        //         echo $var['name'].PHP_EOL;
        //         $seleced =    $this->findThumbAndPhoto($var->images()->get());
        //         echo $seleced['photo'].PHP_EOL;
        //         echo $seleced['thumb'].PHP_EOL;
        //         // foreach($var->images()->get() as $img){
        //         //     echo $img->image.PHP_EOL;
        //         // }
        //         if(!empty($seleced['photo']) && !empty($seleced['thumb'])){
        //             $var->photo = $seleced['photo'];
        //             $var->thumbnail = $seleced['thumb'];
        //             $var->save();
        //         }
        // }

    }
}
