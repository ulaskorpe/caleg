<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sizes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class SizesController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.sizes.index');
    }

    public function datatables()
    {
        $datas = Sizes::all();
        
        return DataTables::of($datas)
        ->editColumn('name', function (Sizes $data) {
            return $data->name;
        })
        ->editColumn('price', function (Sizes $data) {
            return $data->price;
        })
        ->editColumn('created', function (Sizes $data) {
            return $data->created_at;
        })
        ->addColumn('action', function (Sizes $data) {
            $button = 
            '<div class="btn-group">'.
                '<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                    __('Action').
                '</button>
                <div class="dropdown-menu">'.
                    '<a class="dropdown-item" href="'.route('admin.sizes.edit',$data->id).'">'.__('Edit').'</a>'.
                    // '<a class="dropdown-item highlights" data-bs-toggle="modal" data-bs-target="#highlights" data-href="' . route('admin.tour.highlights', $data->slug) . '" style="cursor: pointer !important";>'.__('Highlights').'</a>'.
                    '<a class="dropdown-item text-danger" onclick=deleteSize("'.$data->id.'") style="cursor: pointer !important"; >'.__('Delete').'</a>'.
                '</div>'.
            '</div>';
            return $button;
        })
        ->rawColumns(['action'])
        ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validating and store new size details
        try{
            Validator::make($request->all(), [
                'size'=> ['required','unique:sizes,name', 'string'],
                'price'=> ['required','numeric'],
            ])->validate();
            
            $input = $request->all();
            $input['name'] = $input['size'];
            
            unset($input['_token'],$input['size']);
            
            $Size = new Sizes;
            $Size->fill($input)->save();

            return response()->json([
                "status" => true,
                "message"=> __('Size added Successfully')
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message"=> $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Sizes $sizes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($size_id)
    {
        try{

            $input['size'] = $size_id;
            Validator::make($input, [
                'size'=> ['required', 'exists:sizes,id', 'numeric']
            ])->validate();


            $data['size'] = Sizes::find($size_id);
            return view('admin.sizes.edit',$data);

        }catch(\Exception $e){

            return response()->json([
                "status" => false,
                "message"=> $e->getMessage()
            ]);
            
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $size)
    {
        //validating and update size details
        try{
            $request['size_id']=$size;
            Validator::make($request->all(), [
                'size_id'=> ['required','exists:sizes,id', 'numeric'],
                'name'=> ['required', 'string'],
                'price'=> ['required','numeric'],
            ])->validate();

            $size = Sizes::find($size);
            if($size->name != $request->name){
                Validator::make($request->all(), [
                    'name'=> ['unique:sizes,name'],
                ])->validate();
            }
            
            $input = $request->all();
            unset($input['_token'],$input['size_id']);
            
            $size->update($input);

            return response()->json([
                "status" => true,
                "message"=> __('Size updated Successfully')
            ]);
        }catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message"=> $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($size_id)
    {
        try{

            $input['size_id'] = $size_id;
            Validator::make($input, [
                'size_id'=> ['required', 'exists:sizes,id', 'string']
            ])->validate();

            $categories = Category::whereJsonContains('sizes',$size_id)->get()->count();

            if($categories > 0){
                return response()->json([
                    "status" => false,
                    "message" => "This Size is used in ".$categories." categories"
                ]);
            }

            Sizes::find($size_id)->delete();

            return response()->json([
                "status" => true,
                "message" => "Size Deleted Successfully"
            ]);
            
        }catch(\Exception $e){

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
            
        }
    }
}
