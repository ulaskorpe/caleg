<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index($slug){
        try{
            $data['slug'] = $slug;
            Validator::make($data, [
                'slug'=> ['required', 'exists:pages,slug', 'string'],
            ])->validate();

            $page = Pages::where('slug',$slug)->where('status',1)->first();

            if(!$page){
                abort(404);
            }
            
            $data['slug'] = $page->slug;
            $data['page'] = (object) json_decode($page->content,true);
            return view('page',$data);
        }catch(\Exception $e){
            abort(404);
        }
    }
}
