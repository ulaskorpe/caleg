<?php

namespace App\Http\Controllers\Admin;

use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class TypeController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.types.index');
    }

    public function datatables()
    {
        $datas = Types::all();

        return DataTables::of($datas)
            ->editColumn('name', function (Types $data) {
                return $data->name;
            })
            ->editColumn('price', function (Types $data) {
                return $data->price;
            })
            ->editColumn('created', function (Types $data) {
                return $data->created_at;
            })
            ->addColumn('action', function (Types $data) {
                $button =
                    '<div class="btn-group">' .
                    '<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
                    __('Action') .
                    '</button>
                    <div class="dropdown-menu">' .
                    '<a class="dropdown-item" href="' . route('admin.types.edit', $data->id) . '">' . __('Edit') . '</a>' .
                    // '<a class="dropdown-item highlights" data-bs-toggle="modal" data-bs-target="#highlights" data-href="' . route('admin.tour.highlights', $data->slug) . '" style="cursor: pointer !important";>'.__('Highlights').'</a>'.
                    '<a class="dropdown-item text-danger" onclick=deleteType("' . $data->id . '") style="cursor: pointer !important"; >' . __('Delete') . '</a>' .
                    '</div>' .
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
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validating and store new type details
        try {
            Validator::make($request->all(), [
                'type' => ['required', 'unique:types,name', 'string'],
                'price' => ['required', 'numeric'],
            ])->validate();

            $input = $request->all();
            $input['name'] = $input['type'];

            unset($input['_token'], $input['type']);

            $Type = new Types;
            $Type->fill($input)->save();

            return response()->json([
                "status" => true,
                "message" => __('Type added Successfully')
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
    public function show(types $types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($type_id)
    {
        try {

            $input['type'] = $type_id;
            Validator::make($input, [
                'type' => ['required', 'exists:types,id', 'numeric']
            ])->validate();


            $data['type'] = Types::find($type_id);
            return view('admin.types.edit', $data);
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
    public function update(Request $request, $type)
    {
        //validating and update type details
        try {
            $request['type_id'] = $type;
            Validator::make($request->all(), [
                'type_id' => ['required', 'exists:types,id', 'numeric'],
                'name' => ['required', 'string'],
                'price' => ['required', 'numeric'],
            ])->validate();

            $types = Types::find($type);
            if ($types->name != $request->name) {
                Validator::make($request->all(), [
                    'name' => ['unique:types,name'],
                ])->validate();
            }

            $input = $request->all();
            unset($input['_token'], $input['type_id']);

            $types->update($input);

            return response()->json([
                "status" => true,
                "message" => __('Type updated Successfully')
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
    public function destroy($type_id)
    {
        try {

            $input['type_id'] = $type_id;
            Validator::make($input, [
                'type_id' => ['required', 'exists:types,id', 'string']
            ])->validate();

            types::find($type_id)->delete();

            return response()->json([
                "status" => true,
                "message" => "Type Deleted Successfully"
            ]);
        } catch (\Exception $e) {

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }
}
