<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;
use App\Models\Sizes;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index');
    }

    public function datatables()
    {
        $datas = Category::all();

        return DataTables::of($datas)
            ->editColumn('name', function (Category $data) {
                return $data->name;
            })
            ->editColumn('slug', function (Category $data) {
                return $data->slug;
            })
            ->editColumn('created', function (Category $data) {
                return $data->created_at;
            })
            ->addColumn('status', function (Category $data) {
                $stat = $data->status ? 'checked' : '';
                $button =
                    '<div class="input-group form-check form-switch">
                <input value="" onchange=ChangeStat("' . $data->slug . '") type="checkbox" style="cursor: pointer" class="form-check-input" ' . $stat . ' >' .
                    '</div>';
                return $button;
            })
            ->addColumn('action', function (Category $data) {
                $button =
                    '<div class="btn-group">' .
                    '<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
                    __('Action') .
                    '</button>
                <div class="dropdown-menu">' .
                    '<a class="dropdown-item" href="' . route('admin.categories.edit', $data->slug) . '">' . __('Edit') . '</a>' .
                    // '<a class="dropdown-item highlights" data-bs-toggle="modal" data-bs-target="#highlights" data-href="' . route('admin.tour.highlights', $data->slug) . '" style="cursor: pointer !important";>'.__('Highlights').'</a>'.
                    '<a class="dropdown-item text-danger" onclick=deleteCategory("' . $data->slug . '") style="cursor: pointer !important"; >' . __('Delete') . '</a>' .
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
                'slug' => ['required', 'exists:category,slug', 'string']
            ])->validate();

            $category = Category::where('slug', $request->slug)->first();
            $category->status = $category->status ? 0 : 1;
            $category->update();

            return response()->json([
                "status" => true,
                "message" => "Category Status Updated Successfully"
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
      //  $data['sizes'] = $this->sizes;
        $data['sizes'] = Sizes::all(); //$this->types;
        return view('admin.category.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validating and store new category details
        try {
            Validator::make($request->all(), [
                'name' => ['required', 'unique:category,name', 'string'],
                'slug' => ['required', 'unique:category,slug', 'string'],
                'brief' => ['required', 'string'],
                'banner' => ['required', 'mimes:jpeg,png,jpg'],
                'sizes' => ['required', 'array'],
                'meta_tag' => ['nullable', 'string'],
                'meta_description' => ['nullable', 'string'],
            ])->validate();

            $input = $request->all();
            unset($input['_token'], $input['banner']);

            $file = $request->file('banner');
            $banner_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file->getClientOriginalExtension());

            $file->move('assets/images/categories', $banner_name);

            $input['banner'] = $banner_name;

            $Category = new Category;
            $Category->fill($input)->save();

            return response()->json([
                "status" => true,
                "message" => __('Category added Successfully')
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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category_slug)
    {
        try {

            $input['category'] = $category_slug;
            Validator::make($input, [
                'category' => ['required', 'exists:category,slug', 'string']
            ])->validate();


            $data['category'] = Category::with('Sizes')->where('slug', $category_slug)->where('language_id', 1)->first();


            $data['sizes'] = Sizes::all(); //$this->types;
          $data['sizes_array'] = $data['category']->sizes()->pluck('sizes.id')->toArray();

            return view('admin.category.edit', $data);
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
    public function update(Request $request, $category)
    {
        //validating and update the category details
        try {
            $request['category'] = $category;
            // dd($request->all());
            Validator::make($request->all(), [
                'category' => ['required', 'exists:category,slug', 'string'],
                'name' => ['required', 'string'],
                'slug' => ['required', 'string'],
                'brief' => ['required', 'string'],
                'sizes' => ['required', 'array'],
                'meta_tag' => ['nullable', 'string'],
                'meta_description' => ['nullable', 'string'],
            ])->validate();

            $category = Category::where('slug', $category)->first();

            if ($category->name != $request->name) {
                Validator::make($request->all(), [
                    'name' => ['unique:category,name'],
                ])->validate();
            }

            if ($category->slug != $request->slug) {
                Validator::make($request->all(), [
                    'slug' => ['unique:category,slug'],
                ])->validate();
            }

            $input = $request->all();
            unset($input['_token'], $input['banner'], $input['category']);

            if ($file = $request->file('banner')) {

                Validator::make($request->all(), [
                    'banner' => ['mimes:jpeg,png,jpg']
                ])->validate();

                $banner_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $file->getClientOriginalExtension());

                $file->move('assets/images/categories', $banner_name);

                $input['banner'] = $banner_name;

                $path = public_path() . '/assets/images/categories/' . $category->banner;
                if (File::exists($path)) File::delete($path);
            }

            $category->update($input);

            return response()->json([
                "status" => true,
                "message" => __('Category updated Successfully'),
                "banner" => $category->banner
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
    public function destroy($category_slug)
    {
        try {

            $input['category'] = $category_slug;
            Validator::make($input, [
                'category' => ['required', 'exists:category,slug', 'string']
            ])->validate();

            $category = Category::where('slug', $category_slug)->first();
            $path = public_path() . '/assets/images/categories/' . $category->banner;
            if (File::exists($path)) File::delete($path);
            $category->delete();

            return response()->json([
                "status" => true,
                "message" => "Category Deleted Successfully "
            ]);
        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }
}
