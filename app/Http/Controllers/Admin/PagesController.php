<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\DataTables;

class PagesController extends Controller
{
    public function list(){

        return view('admin.pages.index');

    } 

    public function datatables(){

        $datas = Pages::all();
        
        return DataTables::of($datas)
        ->editColumn('slug', function (Pages $data) {
            return $data->slug;
        })
        ->editColumn('name', function (Pages $data) {
            $data = (object) json_decode($data->content,true);
            return $data->name;
        })
        ->addColumn('status', function (Pages $data) {
            $stat = $data->status ? 'checked' : '';
            $button = 
            '<div class="input-group form-check form-switch">
                <input value="" onchange=ChangeStat("'.$data->slug.'") type="checkbox" style="cursor: pointer" class="form-check-input" '.$stat.' >'.
            '</div>';
            return $button;

        })
        ->editColumn('created', function (Pages $data) {
            return $data->created_at;
        })
        ->addColumn('action', function (Pages $data) {
            $button = 
            '<div class="btn-group">'.
                '<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.
                    __('Action').
                '</button>
                <div class="dropdown-menu">'.
                    '<a class="dropdown-item" href="'.route('admin.page.edit',$data->slug).'">'.__('Edit').'</a>'.
                    // '<a class="dropdown-item highlights" data-bs-toggle="modal" data-bs-target="#highlights" data-href="' . route('admin.tour.highlights', $data->slug) . '" style="cursor: pointer !important";>'.__('Highlights').'</a>'.
                    '<a class="dropdown-item text-danger" onclick=deleteSize("'.$data->slug.'") style="cursor: pointer !important"; >'.__('Delete').'</a>'.
                '</div>'.
            '</div>';
            return $button;
        })
        ->rawColumns(['action','status'])
        ->toJson();
    }

    public function create(){
        //
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        //validating and store new type details
        try {
            Validator::make($request->all(), [
                'slug' => ['required', 'unique:pages,slug', 'string'],
                'name' => ['required', 'string'],
                'banner' => ['required', 'image'],
                'content' => ['required', 'string']
            ])->validate();



            $input['slug'] = $request->slug;
            $input['content']['name'] = $request->name;

            $banner =$request->banner;
            $name = time() . \Str::random(8) .'.'.str_replace(' ', '', $banner->getClientOriginalExtension());
            $banner->move('assets/images/pages/banners/', $name);
            $input['content']['banner'] = $name;
            
            $input['content']['content'] = $request->content;
            $input['content'] = json_encode($input['content'],true);

            $Type = new Pages;
            $Type->fill($input)->save();

            return response()->json([
                "status" => true,
                "message" => __('Page added Successfully')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function edit($slug)
    {
        try {
            $input['slug'] = $slug;
            Validator::make($input, [
                'slug' => ['required', 'exists:pages,slug', 'string'],
            ])->validate();
            $page= (object) json_decode(Pages::where('slug',$slug)->first()->content,true);
            $data['page'] = (object) json_decode(
                json_encode([
                    'slug' => $slug,
                    'name' => $page->name,
                    'banner' => $page->banner,
                    'content' => $page->content
                ])
            );
            return view('admin.pages.edit', $data);

        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function update(Request $request)
    {
        //validating and update page details
        try {
            Validator::make($request->all(), [
                'id' => ['required', 'exists:pages,slug', 'string'],
                'name' => ['required', 'string'],
                'content' => ['required', 'string']
            ])->validate();

            $page = Pages::where('slug',$request->id)->first();
            $page_content = (object) json_decode($page->content,true);
            $input['slug'] = $page->slug;
            
            if($request->slug != $page->slug){
                Validator::make($request->all(), [
                    'slug' => ['required', 'unique:pages,slug', 'string'],
                ])->validate();

                $input['slug'] = $request->slug;
            }

            $page_content->name = $request->name;
            $page_content->content = $request->content;

            $delete_old_banner = null;
            if($request->has('banner')){
                $banner =$request->banner;
                $name = time() . \Str::random(8) .'.'.str_replace(' ', '', $banner->getClientOriginalExtension());
                $banner->move('assets/images/pages/banners/', $name);
                $delete_old_banner = $page_content->banner;
                $page_content->banner = $name;
            }
            
            $input['content'] = json_encode($page_content,true);
            $page->update($input);

            if($delete_old_banner){
                File::delete(public_path().'/assets/images/pages/banners/'.$delete_old_banner);
            }

            return response()->json([
                "status" => true,
                "message" => __('Page updated Successfully')
            ]);

        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function update_status(Request $request){
        try{
            Validator::make($request->all(), [
                'slug'=> ['required', 'exists:pages,slug', 'string']
            ])->validate();

            $page = Pages::where('slug',$request->slug)->first();
            $page->status = $page->status ? 0 : 1;
            $page->update();

            return response()->json([
                "status" => true,
                "message" => "Page Status Updated Successfully"
            ]); 
            
        }catch(\Exception $e){

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);

        }
    }

    public function destroy($slug)
    {
        try {

            $input['slug'] = $slug;
            Validator::make($input, [
                'slug' => ['required', 'exists:pages,slug', 'string']
            ])->validate();

            $page = Pages::where('slug',$slug)->first();
            $page_content = (object) json_decode($page->content,true);
            $page->delete();

            File::delete(public_path().'/assets/images/pages/banners/'.$page_content->banner);
            
            return response()->json([
                "status" => true,
                "message" => "Page Deleted Successfully"
            ]);

        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }
}
