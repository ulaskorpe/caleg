<?php

namespace App\Console\Commands;

use App\Models\CatalogImage;
use App\Models\ProductImage;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Storage;
class FillCatalogImage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill-catalog-image';

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

$images = CatalogImage::orderBy('id')->skip(8000)->limit(1000)->get();
foreach($images as $img){
    $pi = ProductImage::with('product_variant','product_variant.product')->where('image','LIKE','%'.$img['image'].'%')->first();
    if(!empty($pi)){
        $product = $pi->product_variant()->first()->product()->first();

        $path = public_path('assets/products/'.$product->slug);



        if (!File::exists($path)) {
    // Create the directory
          File::makeDirectory($path, 0755, true);
        }


     $sourcePath = public_path('test/'.$img['image']); // Replace with your actual image file name
 $destinationPath = public_path('assets/products/'.$product->slug.'/'.$img['image']); // Replace with your desired destination path

//Storage::copy('assets/products/'.$product->slug.'/'.$img, 'test/test_copy.png');


if (!File::exists($sourcePath)) {

    echo $sourcePath.PHP_EOL;
} else {
    //echo 'Source file exists. Proceeding to copy...';
    File::copy($sourcePath, $destinationPath);
    echo  $product->slug."::". $img['image'].PHP_EOL;
}

    }
}

        // $directoryPath = public_path('test/xxx'); // Replace with your actual directory path

        // // Get all files in the directory
        // $files = File::files($directoryPath);

        // // Print the list of files
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
    }
}
