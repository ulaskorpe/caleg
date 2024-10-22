<?php

namespace App\Console\Commands;

use App\Http\Controllers\Helpers\GeneralHelper;
use App\Models\CatalogImage;
use App\Models\ProductImage;
use App\Models\Products;
use App\Models\ProductVariant;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class ScanImageDirectory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scan-image-directory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */



     function searchFileByPartialName($keyword)
{
    $directory = public_path('catalog'); // Define the base directory
    $files = File::allFiles($directory); // Get all files under the base directory recursively

    $matchedFiles = []; // Initialize an array to store matched files

    foreach ($files as $file) {
        if (stripos($file->getFilename(), $keyword) !== false) { // Check if the filename contains the keyword (case-insensitive)
            $matchedFiles[] = $file->getPathname(); // Add the full path of the matched file to the array
        }
    }

    return $matchedFiles; // Return all matched files
}




private function listAllFilesInCatalog()
{
    $baseDirectory = public_path('catalog'); // Define the base directory
    $files = File::allFiles($baseDirectory); // Get all files under the base directory recursively

    $relativePaths = []; // Initialize an array to store relative file paths

    foreach ($files as $file) {
        // Get relative path by removing the base directory part
        $relativePaths[] = str_replace($baseDirectory, '', $file->getPathname());
    }

    return $relativePaths; // Return all relative file paths
}

private function stripSlug($slug){
    $array = explode('-',$slug);
  //  $array = array_pop($array);
    $result = str_replace('-'.$array[count($array)-1],'', implode('-', $array));
    return $result; //implode('-',$array);
}


private function fixImageName($img){



    $img= substr($img,1,strlen($img)-1);


        $img = GeneralHelper::fixName($img) ;

    return $img;
}
    public function handle()
    {
        // $allFiles = $this->listAllFilesInCatalog();
        // foreach ($allFiles as $filePath) {
        //     $image = new CatalogImage();
        //     $image->image = $filePath;
        //     $image->save();
        //     echo $filePath . PHP_EOL;
        // }

        // $directory = public_path('catalog'); // Define the base directory
        // $files = File::allFiles($directory); // Get all files under the base directory recursively

        // $filePaths = []; // Initialize an array to store file paths

        // foreach ($files as $file) {
        //     $filePaths[] = $file->getPathname(); // Add the full path of the file to the array
        // }

        // echo $filePaths.PHP_EOL; // Return all file paths


//         $cimages = ProductImage::where('image','like','iis_guvenligi_levhalari/%')->get();

//         foreach($cimages as $img){

// //$new =  substr($img->image,1,strlen($img->image));
//                //  $new= $this->fixImageName($img->image);
//                 //   $new = str_replace('/oför/','sofor/',$img->image);
//                      $new = str_replace('iis_guvenligi_levhalari/','is_guvenligi_levhalari/',$img->image);
//                     // $new = str_replace('radyasyon_-_lazer_-_isin','radyasyon_lazer_isin',$new);
//                     // $new = str_replace('hava_-_su_-_isi','hava_su_isi',$new);
//                     // $new = str_replace('dogalgaz_-_gaz','dogalgaz_gaz',$new);
//                 //   $new = str_replace('insaat_sanayi_levhalari/nsaat/','insaat_sanayi_levhalari/insaat/',$img->image);
//                 //   $new = str_replace('insaat_sanayi_levhalari/for-arac-kantar-yaya','insaat_sanayi_levhalari/sofor-arac-kantar-yaya',$new);
//             //    $new = str_replace('cep_telefonu_-_kamera','cep_telefonu_kamera',$new);
//             //    $new = str_replace('_yeri_-_fabrika','is_yeri_fabrika',$new);
//             //    $new = str_replace('vinc_-_caraskal','vinc_caraskal',$new);
//             //    $new = str_replace('is_yeri_-_fabrika','is_yeri_fabrika',$new);
//           // $new = str_replace('atiklar_-_geri_donusum','atiklar_geri_donusum',$img->image);
//                 $img->image  = $new;
//                 $img->save();
//        //  echo  $img->image.PHP_EOL;
//           echo $new.PHP_EOL;

//         }

//         die();
      //  $variants = ProductVariant::with('images')->where('photo','=','photo')->skip(12000)->limit(4000)->get();
        $products = Products::with('images')->where('photo','=','photo')->skip(0)->limit(4000)->get();
        foreach($products as $var){
            // $slug = str_replace('---','-',str_replace('_','-',$var['slug']));
            // $var->slug = $slug;
            // $var->save();
              $key = $this->stripSlug($var['slug']);
              $cimages = CatalogImage::where('image', 'LIKE', '%' . $key . '%');



             if($cimages->count()>0){
            // echo $ci.":";
                  $this->line("<fg=green>$var->slug</>");
                foreach($cimages->get() as $image){
                    $pi = new ProductImage();
                    $pi->product_id = $var['id'];
                    //$pi->product_variant_id = $var['id'];
                    $pi->image = $image->image;

                  //  $pi->save();
                    echo $image->image.PHP_EOL;
                }
             }

            // $this->line("<fg=green>$var->slug</>");
            // foreach($var->images()->get() as $i){
            //     echo $i->image .PHP_EOL;
            // }






        }

        // $files = File::allFiles(public_path('catalog'));

        // foreach ($files as $file) {
        //     if($this->findProduct( $this->makeSlug($file->getFilename()) )){
        //     echo $file->getFilename(). PHP_EOL;
        //     }
        //    // echo $this->makeSlug($file->getFilename()).PHP_EOL;
        //     }
     } /// handle
   //    $bar = $this->output->createProgressBar($count);


    private function makeSlug($item){
        $array = explode(".",$item);
        return str_replace("-","_",$array[0]);
    }

    private function findProduct($slug){
    $product= Products::where('slug','=',$slug)->first();
       // return (!empty($p))?$product['name']:false;
       if(empty($product)){
            $variant = ProductVariant::where('slug','=',$slug)->first();
            return (!empty($variant))?$variant['name']:false;
       }else{
        return $product['name'];
       }
    }
}
