<?php

namespace App\Observers;

use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Helpers\GeneralHelper;
use App\Models\Types;

class ProductObserver
{///İş Makinası  Uyarı Levhası


    private function delete_files($slug,$photo){
        $directoryPath = public_path('assets/products/'.$slug);
        if(File::isDirectory($directoryPath)){
        $files = File::files($directoryPath);

        foreach ($files as $file) {
                        $f = $file->getFilename();
                        if($f !=$photo){
                       unlink($directoryPath."/".$f);
                        }
        }
    }

    }


    private function changeLocation(Products $product, $old_location,    $old_order   ){
        if(!empty($old_location)){

            Products::where('id', '!=', $product['id'])
            ->where('location','=',$old_location)
            ->where('order','>=',$old_order)
            ->decrement('order',1);

       }
        if(!empty($product['location'])){
            $order = ($product['order'])?$product['order']:1;

            Products::where('id', '!=', $product['id'])
                ->where('location','=',$product['location'])
                ->where('order','>=',$order)
                ->increment('order',1);

        }
    }

    public function saved(Products $product){

         if($product->isDirty('slug')){
            $slug = (!empty($product->getOriginal('slug')))?$product->getOriginal('slug'):$product['slug'];
                    $oldPath = public_path('assets/products/'.$slug);
            $newPath = public_path('assets/products/'.$product->slug); // Path with the new folder name
            if (File::exists($oldPath)) {
            File::chmod($oldPath, 0755);
                   File::move($oldPath, $newPath);

              //  File::makeDirectory($newPath, 0755, true);

            }
           // Log::channel('data_check')->info($oldPath."::".$newPath);
         }
         if($product->isDirty('order')){

            if($product->isDirty('location')){
                $this->changeLocation($product , $product->getOriginal('location'),$product->getOriginal('order'));
            }else{//// sane kıcatşıb

                if($product->getOriginal('order')> $product['order']){
                    Products::where('id', '!=', $product['id'])
                        ->where('order','>',$product['order'])
                        ->where('location','=',$product['location'])
                        ->where('order','<=',$product->getOriginal('order'))->increment('order',1);
                }else{
                    Products::where('order','<',$product['rank'])
                        ->where('order','>=',$product->getOriginal('order'))
                        ->where('location','=',$product['location'])
                        ->where('id', '!=', $product['id'])
                        ->decrement('order',1);
                }


            } /// same location
            Log::channel('data_check')->info($product->getOriginal('order')."::".$product['order']);

         }else{
              if($product->isDirty('location')){
                $this->changeLocation($product , $product->getOriginal('location'),$product->getOriginal('order'));

            }
            Log::channel('data_check')->info($product->getOriginal('location')."::".$product['location']);
        }////

        //  if($product->isDirty('type_id') && !$product->isDirty('photo')){

        //     if(!empty($product->getOriginal('type_id'))){
        //         $large = 50005000;
        //         $this->delete_files($product['slug'],$product['photo']);
        //         $txt = "";
        //         $extension = GeneralHelper::findExtension($product['photo']);
        //         $path = public_path("assets/products/" . $product['slug'] . "/".$product['photo']);

        //         $types = Types::whereIn('id',explode(",",$product['type_id']))->get();
        //         //foreach($product->types()->get() as $var ){
        //         foreach($types as $var){
        //             $txt.=$var['name'];
        //             $filename = str_replace($extension,"",$product['photo']);

        //             $size = explode("x",$var['name']);
        //             $resizedImage = Image::make($path)->resize(intval($size[0]), intval($size[1]), function ($constraint) {
        //                 $constraint->aspectRatio();
        //             });
        //             $resizedImage->save(public_path("assets/products/" . $product['slug'] . "/".$filename."-".$size[0]."x".$size[1].".".$extension));
        //             if(($size[0]*$size[1]) < $large){
        //                 $large = $size[0]*$size[1];
        //                 $thumb = $filename."-".$size[0]."x".$size[1].".".$extension;

        //             }

        //         }/// foreach
        //         Products::where('id','=',$product['id'])->update(['thumbnail'=>$thumb]);




        //        // Log::channel('data_check')->info($product->getOriginal('type_id')."::".$product['type_id'].":::".$txt);
        //      ///   Log::channel('data_check')->info($product->getOriginal('type_id').":::::".$product['type_id']);


        //     }


        //  }




    }

    public function deleted(Products $product){
        if(!empty($product['location'])){

            Products::where('id', '!=', $product['id'])
                ->where('location','=',$product['location'])
                ->where('order','>=',$product['order'])
                ->decrement('order',1);

        }

    }

    private function makeFiles($file,$types=[]){

    }


}
