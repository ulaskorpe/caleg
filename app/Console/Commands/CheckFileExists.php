<?php

namespace App\Console\Commands;

use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class CheckFileExists extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check-file-exists';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    private function checkFile($file)
    {
      //  $filePath = public_path('catalog/'.$file);
      $filePath = public_path('catalog/' . $file);

        if(File::exists($filePath)){
        return true;
        }

        return false;
        // if (File::exists($filePath)) {
        //     return response()->json(['message' => 'The file exists.']);
        // } else {
        //     return response()->json(['message' => 'The file does not exist.'], 404);
        // }
    }

    //is-guvenligi-ikaz-levhasi-iyvcsia-228x228_jpg
    //is-guvenligi-ikaz-levhasi-iyvcsia-228x228.jpg
    /**
     * Execute the console command.
     */

     private function fixName($img){
        $img = str_replace('_jpg','.jpg',$img);
        $img = str_replace('_jpeg','.jpeg',$img);
        return $img;
     }
    public function handle()
    {

        $images = ProductImage::skip(0)->limit(1000)->get();
        foreach($images as $img){
// $img = "dikkat-olum-tehlikesi-uyari-levhasi-400x400.jpg";

if(is_file(public_path('/catalog/'.$img['image']))){
  //  echo public_path('catalog'.$img['image']).PHP_EOL;
  echo $img->image;
}

}
    //     $images = ProductImage::skip(0)->limit(100)->get();




    //     $dont_exists_array = [];
    //     foreach($images as $img){
    //         $filePath = public_path('catalog/' . $img->image);
    //         echo $filePath.PHP_EOL;

    //    // if(File::exists($filePath)){
    //    if(is_file($filePath)){
    //         $dont_exists_array[] = ['id'=>$img->id,'img'=> $img->image];
    //     }

        //     $fx= $this->fixName($img->image);
        //     $img->image = $fx;
        //     $img->save();
        //    // $this->checkFile($fx).PHP_EOL;

        // }

    //   //  echo count($dont_exists_array);
        // foreach($dont_exists_array as $item){
        //     echo $item['id']."::".$item['img'].PHP_EOL;
        // }

    }
}
