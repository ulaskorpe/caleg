<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;
use App\Models\Products;
use App\Models\Category;
use App\Models\Types;

class FixThumbAndPhoto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix-thumb-photo';

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

    //  private function findType($img){

    //     $dz = explode("-",str_replace(".jpg","",str_replace(".jpeg","",$img)));
    //     $name= $dz[count($dz)-1];

    //     return  $name ;

    // }

    public function handle()
    {
        $products = Products::with('variants')->skip(value: 1000)->limit(500)->get();
        $count = 1;
        foreach($products as $product){

            $directory = public_path('assets/products/'.$product['slug']);
            $type_array=[];
            $files = File::allFiles($directory);

            // Display files
            foreach ($files as $file) {
          ///   $typeid= $this->findType($file->getFilename());
             if(!in_array($file->getFilename(),$type_array)){
                 $type_array[]=$file->getFilename();
                // echo  $typeid. PHP_EOL;
             }

            }

            $result = $this->findThumbAndPhoto($type_array);
            echo $result['photo'].PHP_EOL;
            echo $result['thumb'].PHP_EOL;
            if(!empty($result)) {
                $product->thumbnail = $result['thumb'];
                $product->photo = $result['photo'];
                $product->save();
            }

            //


                $count++;

        }
    }
}
