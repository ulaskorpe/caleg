<?php

namespace App\Http\Controllers\Admin;

use App\Models\Products;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\Http\Services\ProductServices;
use App\Models\Category;
use App\Models\Comment;
use App\Models\SiteLocation;
//use App\Models\Sizes;
use App\Models\Types;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use App\Traits\HttpResponses;
class ProductsController extends AdminController
{

    use HttpResponses;


    private $service ;
    public function __construct(ProductServices $service){
        $this->service =  $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.products.index',['types'=>Types::orderBy('name')->get(),'categories'=>Category::all()]);
    }


    public function comments()
    {
       return view('admin.products.comments',[ ]);
    }

    public function product_comments($page=0,$product_id=0,$status = 0){

        if($status >0){
            $c = Comment::find($status);
            $c->status  = ($c['status']==1)?0:1;
            $c->save();

        }

        $per_page= 100;
        if($product_id > 0){
            $comments = Comment::where('product_id','=',$product_id)  ;
        }else{
            $comments = Comment::with('product') ;
        }
        $product_count  = $comments->count();




        $comments =  $comments->skip($per_page*$page)->limit(100)->orderBy('created_at','DESC')->get();

        $page_count  = ceil($product_count/$per_page);




        $data = ['page_count'=>$page_count,'comments'=>$comments,'page'=>$page];


        return view('admin.products.product_comments',$data);
    }

    public function product_list($page=0,$keyword="",$type="",$category_id=""){
           // $count


        $per_page= 100;



           $products = Products::with('categories','types')->select('id','title','thumbnail','name','created_at','slug','category_id')->where('id','>',0);
           //->where('category_id','<>','0')


           if(!empty($keyword) &&  $keyword !="0"){
           // echo $keyword;
            $products = $products->where(function($query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%')
                      ->orWhere('description', 'like', '%' . $keyword . '%')
                      ->orWhere('title', 'like', '%' . $keyword . '%');
            });
           }
           if(!empty($type)){
            $products =  $products->where('type_id','LIKE','%'.$type.'%');
           }

           if(!empty($category_id)){
            $products =  $products->where('category_id','LIKE','%'.$category_id.'%');
           }

           $product_count  = $products->count();

         
 
           $page_count  = ceil($product_count/$per_page);
         $products =  $products->skip($per_page*$page)->limit(100)->orderBy('id','DESC')->get();

         $data = ['page_count'=>$page_count,'products'=>$products,'page'=>$page];




      

           return view('admin.products.datatable',$data);//

    }

    public function datatables()
    {
        $datas = Products::all();

        return DataTables::of($datas)
            ->editColumn('name', function (Products $data) {
                return $data->name;
            })
            ->editColumn('price', function (Products $data) {
                return $data->price;
            })
            ->editColumn('created', function (Products $data) {
                return $data->created_at;
            })
            ->addColumn('status', function (Products $data) {
                $stat = $data->status ? 'checked' : '';
                $button =
                    '<div class="input-group form-check form-switch">
                    <input value="" onchange=ChangeStat("' . $data->slug . '") type="checkbox" style="cursor: pointer" class="form-check-input" ' . $stat . ' >' .
                    '</div>';
                return $button;
            })
            ->addColumn('action', function (Products $data) {
                $button =
                    '<div class="btn-group">' .
                    '<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
                    __('Action') .
                    '</button>
                    <div class="dropdown-menu">' .
                    '<a class="dropdown-item" href="' . route('admin.products.edit', $data->slug) . '">' . __('Edit') . '</a>' .
                    '<a class="dropdown-item text-danger" onclick=deleteProduct("' . $data->slug . '") style="cursor: pointer !important"; >' . __('Delete') . '</a>' .
                    '</div>' .
                    '</div>';
                return $button;
            })
            ->rawColumns(['status', 'action'])
            ->toJson();
    }

    public function update_status(Request $request)
    {
        try {
            Validator::make($request->all(), [
                'slug' => ['required', 'exists:products,slug', 'string']
            ])->validate();

            $product = Products::where('slug', $request->slug)->first();
            $product->status = $product->status ? 0 : 1;
            $product->update();

            return response()->json([
                "status" => true,
                "message" => "Product Status Updated Successfully"
            ]);
        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        // $oldPath = public_path('assets/products/0006456456456');
        // $newPath = public_path('assets/products/0021XXXXX'); // Path with the new folder name

        // if (File::exists($oldPath)) {
        //     File::chmod($oldPath, 0755);
        //     File::move($oldPath, $newPath);
        //     $msg= 'Folder renamed successfully.';
        // } else {
        //     File::makeDirectory($newPath, 0755, true);
        //     $msg=  'Folder does not exist.';
        // }

        // Log::channel('data_check')->info($msg);

        // die();
        //
        $data['types'] = Types::all(); //$this->types;

        $data['submit_form']  = false;

        $data['categories'] = Category::all(); //$this->categories;
        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function check_slug($slug,$id=0 ){
        $ch = Products::where('slug','=',$slug)->where('id','<>',$id) ->first();
            if($ch){
                return response()->json('bu isimde başka bir ürün mevcut');
            }
        return response()->json("ok");
        }

    public function store(Request $request){

        try{

            $newPath = public_path('assets/products/'.$request['slug']); // Path with the new folder name
            if (!File::exists($newPath)) {
                File::makeDirectory($newPath, 0755, true);

                // Folder already exists, handle as needed (e.g., log a message, skip, etc.)

            }


           $product =  $this->service->saveProduct($request);





            $this->service->create_photo($request, $product);

          //  Log::channel('data_check')->info($request['name']);
            return  $this->success([''],"Ürün Eklendi" ,201);
        }catch(Exception $e){
            //Log::channel('data_check')->info($user->email.":".$txt);
          //  Log::channel('data_check')->info($e->getMessage());
            return  $this->error([''], $e->getMessage() ,500);
        }
    }

    public function location_order($location='',$product_id=0){
        $count = 0;
        if($location !=''){
            $count = Products::where('location','=',$location)->count();
            $count =  ($product_id==0) ? ( (!empty($count))?$count : 2) : ( (!empty($count))?$count : 1) ;
        }

        return view('admin.products.order_div',['location'=>$location,'last'=>$count]);
    }

    public function update(Request $request){

        try{

            $product =  $this->service->saveProduct($request);

            $this->service->create_photo($request, $product);



          //  Log::channel('data_check')->info($request['name']);
            return  $this->success([''],"Ürün Güncellendi" ,201);
        }catch(Exception $e){
            //Log::channel('data_check')->info($user->email.":".$txt);
          //  Log::channel('data_check')->info($e->getMessage());
            return  $this->error([''], $e->getMessage() ,500);
        }
    }

    public function store_ex(Request $request)
    {
        //validating and store new category details
        try {
            Validator::make($request->all(), [
                'name' => ['required', 'unique:category,name', 'string'],
                'slug' => ['required', 'unique:category,slug', 'string'],
                'title' => ['required', 'string'],
                'thumbnail' => ['required', 'mimes:jpeg,png,jpg'],
                'photo' => ['required', 'mimes:jpeg,png,jpg'],
                'status' => ['required'],
                'type_id' => ['required', 'array'],
                'category_id' => ['required', 'array'],
                'description' => ['required', 'string'],
            ])->validate();

            $input = $request->all();


            // thumbnail
            unset($input['_token'], $input['thumbnail']);
            $file_thumbnail = $request->file('thumbnail');
            $thumbnail_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file_thumbnail->getClientOriginalExtension());
            $file_thumbnail->move('assets/images/products', $thumbnail_name);
            $input['thumbnail'] = $thumbnail_name;
            // photo
            unset($input['_token'], $input['photo']);
            $file_photo = $request->file('photo');
            $photo_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file_photo->getClientOriginalExtension());
            $file_photo->move('assets/images/products', $photo_name);
            $input['photo'] = $photo_name;

            // array to string conversion
            $input['category_id'] = json_encode($input['category_id']);
            $input['type_id'] = json_encode($input['type_id']);

            // status

            if ($input['status'] == "on") {
                $input['status'] = 1;
            } else {
                $input['status'] = 0;
            }

            $product = new Products();
            $product->fill($input)->save();

            return response()->json([
                "status" => true,
                "message" => __('Product added Successfully')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    // public function show(Products $products)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    private function calculateSize($img){
        $array = explode("-",$img);
         $size = str_replace(".jpg","", str_replace(".jpeg","", $array[count($array)-1]));
         return $size;
     }


     private function listImages(){

     }

     public function getProductFiles($slug,$delete_img=''){
        $files_array=[];
        $directoryPath = public_path('assets/products/'.$slug);
        $types = Types::all();
        $type_array =[];

        foreach($types as $type){
           // echo $type['name'].",";
           $type_array[$type['name']] = $type['id'];
        }
        $product = Products::where('slug','=',$slug)->first();

        if(!empty($delete_img)){
            if($delete_img!=$product['photo']){
            unlink($directoryPath."/".$delete_img);

            }
        }

            $files = File::files($directoryPath);
            $product_types = [];

            foreach ($files as $file) {
                 $f = $file->getFilename();
                    $size = $this->calculateSize($f);
                 //   echo $size."<br>" ;
                    $files_array[]=['filename'=>$f,'size'=>$size] ;

                //    echo $type_array[$size];
                if (array_key_exists($size, $type_array)) {

                 if(!in_array($type_array[$size],$product_types)){
                     $product_types[]=$type_array[$size]; /// types to attach

                    }

                }
                if(!empty($delete_img)){
                    $product->types()->detach();
                    $product->types()->attach($product_types);
                    Products::where('id','=',$product['id'])->update(['type_id'=>implode(",",$product_types)]);
                }//delete file
              }

           //   return $files_array;

                return  view('admin.products.product_images',['files'=>$files_array,'slug'=>$slug,'main_file'=>$product['photo']]);//$files_array;
     }




    public function edit($product_slug)
    {

//

        try {
            // $input['product'] = $product_slug;
            // Validator::make($input, [
            //     'product' => ['required', 'exists:products,slug', 'string']
            // ])->validate();

            $data['product'] = Products::where('slug', $product_slug)->first();


         //   $product_location = SiteLocation::where('product_id','=',$data['product']['id'])->first();

                $data['selected_location']=((!empty($product_location)))?$product_location['location']:'';



            $data['types'] = Types::all(); //$this->types;
            $data['categories'] = Category::all(); //$this->categories;
            $data['slug'] = $product_slug;
          //  $data['files'] = $this->getProductFiles($product_slug);
            $data['submit_form']  = false;
            $data['types_array'] = explode(',',$data['product']['type_id']);
            $data['categories_array'] = explode(',',$data['product']['category_id']);


            //$data['type_array'] = explode(",",$data['product']['type_id']);
           return view('admin.products.edit', $data);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_old(Request $request, $product_slug)
    {
        //validating and store new category details
        try {

            Validator::make($request->all(), [
                'name' => ['required', 'unique:category,name', 'string'],
                'slug' => ['required', 'unique:category,slug', 'string'],
                'title' => ['required', 'string'],
                'type_id' => ['required', 'array'],
                'category_id' => ['required', 'array'],
                'description' => ['required', 'string'],
            ])->validate();

            $product = Products::where('slug', $product_slug)->first();

            $input = $request->all();

            if ($file = $request->file('thumbnail')) {

                Validator::make($request->all(), [
                    'thumbnail' => ['mimes:jpeg,png,jpg']
                ])->validate();

                $thumbnail_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file->getClientOriginalExtension());

                $file->move('assets/images/products', $thumbnail_name);

                $input['thumbnail'] = $thumbnail_name;

                $path = public_path() . '/assets/images/products/' . $product->thumbnail;
                if (File::exists($path)) File::delete($path);
            }

            if ($file = $request->file('photo')) {

                Validator::make($request->all(), [
                    'photo' => ['mimes:jpeg,png,jpg']
                ])->validate();

                $photo_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file->getClientOriginalExtension());

                $file->move('assets/images/products', $photo_name);

                $input['photo'] = $photo_name;

                $path = public_path() . '/assets/images/products/' . $product->photo;
                if (File::exists($path)) File::delete($path);
            }

            // array to string conversion
            $input['category_id'] = json_encode($input['category_id']);
            $input['type_id'] = json_encode($input['type_id']);

            // status
            $input['status'] = 0;
            if ($input['status'] == "on") {
                $input['status'] = 1;
            }

            $product->update($input);

            return response()->json([
                "status" => true,
                "message" => __('Product updated Successfully')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product_id)
    {
        try {

            // $input['product'] = $product_slug;
            // Validator::make($input, [
            //     'product' => ['required', 'exists:products,slug', 'string']
            // ])->validate();

          //  $product = Products::where('slug', $product_slug)->first();
          $product = Products::find($product_id);
            $path_thumbnail = public_path() . '/assets/images/products/' . $product->thumbnail;
            if (File::exists($path_thumbnail)) File::delete($path_thumbnail);
            $path_photo = public_path() . '/assets/images/products/' . $product->photo;
            if (File::exists($path_photo)) File::delete($path_photo);
            $product->delete();

            return response()->json([
                "status" => true,
                "message" => "Product Deleted Successfully "
            ]);
        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }


    public function product_locations($id , $location="",$order=0){

        $locations = ['top' ,'middle' ,'bottom' ];
        $plus = 1;

        $order = 0;
        $product = Products::find($id);

        if($location !="none"){

        if(!empty($product['location']) && $location == $product['location']){

            $location = $product['location'];
            $order = $product['order'];
            $plus = 0;

        }
     }


        $count = (in_array($location,$locations) )  ? (Products::where('location','=',$location)->count())+$plus : 0 ;

        return  view('admin.products.product_location',['locations'=>$locations,'selected_location'=>$location,'count'=>$count,'order'=>$order]);

    }

}
