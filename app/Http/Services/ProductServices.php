<?php


namespace App\Http\Services;

use App\Models\Products;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers\GeneralHelper;
use App\Models\ProductLocation;
use App\Models\Types;

use Illuminate\Support\Facades\File;
class ProductServices{
    private $allowed_array = ['jpg', 'jpeg','png'];
    //,$sizes_array = [[100,100],[200,200],[400,400],[40,40],[500,500]]

    private function delete_photos($slug){
        $directoryPath = public_path('assets/products/'.$slug);
        if(File::isDirectory($directoryPath)){
        $files = File::files($directoryPath);

        foreach ($files as $file) {
                        $f = $file->getFilename();
                       unlink($directoryPath."/".$f);
        }
            }
    }

 

    public function create_photo(Request $request ,Products $product){

        $photo = ['photo'=>$product['photo'] ,'thumb'=>$product['thumbnail']] ;
        $thumb = "";
        $large = 50005000;
        $file = $request->file('photo');

        if ($request->hasFile('photo')) {
            $this->delete_photos($product['slug']);
            $extension = GeneralHelper::findExtension($file->getClientOriginalName());
            if (in_array($extension, $this->allowed_array)) {
                $file_path = "assets/products/";
            $path = public_path($file_path .$product['slug']);
            $filename = GeneralHelper::fixName($request['name']) . "_" . date('YmdHis')  ;
            $file->move($path, $filename.".".$extension);
            $path = public_path($file_path . $product['slug'] . "/". $filename.".".$extension );
            $types = Types::select('name')->whereIn('id',$request['type_id'])->get();
            foreach($types as $type){
                $size = explode("x",$type['name']);
                $resizedImage = Image::make($path)->resize(intval($size[0]), intval($size[1]), function ($constraint) {
                    $constraint->aspectRatio();
                });
                $resizedImage->save(public_path($file_path . $product['slug'] . "/".$filename."-".$size[0]."x".$size[1].".".$extension));
                if(($size[0]*$size[1]) < $large){
                    $large = $size[0]*$size[1];
                    $thumb = $filename."-".$size[0]."x".$size[1].".".$extension;

                }

            }//sizes


         $photo = ['photo'=>$filename.".".$extension,'thumb'=>$thumb] ;

           }

           $product->photo = $photo['photo'];
           $product->thumbnail = $photo['thumb'];
           $product->save();
     }

      return $photo;
    }/// upload icon

    public function saveProduct(Request $request){


        $product = (!empty($request['id']))? Products::find($request['id']):new Products();
        $product->slug = $request['slug'];
        $product->name = $request['name'];
        $product->title = $request['title'];
        $product->location = (!empty($request['location']))?$request['location']:'';
        $product->order = (!empty($request['order']))?$request['order']:0;
        $product->description = $request['description'];
        $product->category_id = implode(",",$request['category_id']);
        $product->type_id = implode(",",$request['type_id']);
        $product->material_id = implode(",",$request['material_id']);
        $product->price = $request['price'];
        $product->thumbnail =(!empty($request['id']))?$product['thumbnail']:'';
        $product->photo =(!empty($request['id']))?$product['photo']:'';


        $product->status = ($request['status']=='on')?1:0;
        $product->views = 0;
        $product->language_id = 1;
        $product->post_id = 1;
        $product->save();

        $product->categories()->detach();
        $product->materials()->detach();
        $product->types()->detach();

        $product->categories()->attach($request['category_id']);
        $product->types()->attach($request['type_id']);
        $product->materials()->attach($request['material_id']);

         //   $this->site_location($request['location'],$request['order'],$product);
        return $product;

    }


    //// locations 
    public function order_location($product_id ,$location_id,$order){
      //  echo "<br>PL::".$product_id."+++".$location_id.":::".$order;
        $pl = ProductLocation::where('product_id','=',$product_id)->where('location_id','=',$location_id)->first();
        if(empty($pl)){
                $pl = new ProductLocation();
                $pl->product_id = $product_id;
                $pl->location_id = $location_id;
                $pl->rank = $order;
                $pl->save();

                ProductLocation::where('location_id','=',$location_id)
                                ->where('id','<>',$pl['id'])
                                ->where('rank','>=',$order)
                                ->increment('rank',1);
        }else{

            $old_rank = $pl['rank'];
            $pl->rank = $order;
            $pl->save();
    
            if($pl['rank'] > $old_rank){
                ProductLocation ::where('id', '!=', $pl['id'])
                    ->where('location_id','=',$location_id)
                    ->where('rank','>',$old_rank)
                    ->where('rank','<=',$pl['rank'])
                    ->decrement('rank',1);
            }else{
                ProductLocation::where('id', '!=', $pl['id'])
                ->where('location_id','=',$location_id)
                    ->where('rank','>=',$pl['rank'])
                    ->where('rank','<',$old_rank)
                    ->increment('rank',1);

                    
            } 

        

        }

    }


    public function delete_from_location($product_id,$location_id){
        $pl = ProductLocation::where('product_id','=',$product_id)
                            ->where('location_id','=',$location_id)->first();

        ProductLocation::where('location_id','=',$location_id)
        ->where('id','<>',$pl['id'])
        ->where('rank','>=',$pl['rank'])
        ->decrement('rank',1);

        $pl->delete();
    }

}
