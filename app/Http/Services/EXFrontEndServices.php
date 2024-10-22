<?php

namespace App\Http\Services;

use App\Models\Settings;
use Illuminate\Support\Facades\Cache;
use App\Models\Category;
use App\Models\Pages;

// use App\Models\Category;
// use App\Models\Product;
// use App\Models\User;
// use App\Traits\CapthaTrait;
// use Intervention\Image\Facades\Image;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Helpers\GeneralHelper;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
class EXFrontEndServices
{

    public function getSettings(){

        $data = Cache::get('publicdata');
        if(empty($data)){
                // $data['settings']['General_Settings']  =  (object) json_decode(Settings::find(1) , true);//Settings::find(1);
                // $data['settings']['Front_Settings']  =  (object) json_decode(Settings::find(2) , true);//Settings::find(1);
                // $data['settings']['Mail_Settings']  =  (object) json_decode(Settings::find(3) , true);//Settings::find(1);
                // $data['settings']['Seo_Settings']  =  (object) json_decode(Settings::find(4) , true);//Settings::find(1);
                // $data['settings']['Home_Settings']  =  (object) json_decode(Settings::find(5) , true);//Settings::find(1);
                // $data['settings']['Footer_Settings']  =  (object) json_decode(Settings::find(6) , true);//Settings::find(1);


                $data['General_Settings']  =  (object) json_decode(  Settings::where('id', '=', 1)->pluck('value')->first(),  true);//S
                $data['Front_Settings']  =  (object) json_decode(  Settings::where('id', '=', 2)->pluck('value')->first(),  true);//S
                $data['Mail_Settings']  =  (object) json_decode(  Settings::where('id', '=', 3)->pluck('value')->first(),  true);//S
                $data['Seo_Settings']  =  (object) json_decode(  Settings::where('id', '=', 4)->pluck('value')->first(),  true);//S
                $data['Home_Settings']  =  (object) json_decode(  Settings::where('id', '=', 5)->pluck('value')->first(),  true);//S
                $data['Footer_Settings']  =  (object) json_decode(  Settings::where('id', '=', 6)->pluck('value')->first(),  true);//S
                $data['Categories'] = (object) json_decode(Category::select('id','name','slug')->where('status','=',1)->get());
                $data['Pages'] = (object) json_decode(Pages::where('status','=',1)->get());
                Log::channel('data_check')->info($data);
                // $data['settings']['General_Settings']  =   Settings::find(1);  //Settings::find(1);
                // $data['settings']['Front_Settings']  =   Settings::find(2);
                // $data['settings']['Mail_Settings']  =     Settings::find(3);
                // $data['settings']['Seo_Settings']  =    Settings::find(4);
                // $data['settings']['Home_Settings']  =   Settings::find(5);
                // $data['settings']['Footer_Settings']  =   Settings::find(6);

        // $this->Front_Settings = (object) json_decode($this->public_data['settings']->find(2)->value, true);
        // $this->Mail_Settings = (object) json_decode($this->public_data['settings']->find(3)->value, true);
        // $this->Seo_Settings = (object) json_decode($this->public_data['settings']->find(4)->value, true);
        // $this->Home_Settings = (object) json_decode($this->public_data['settings']->find(5)->value, true);
        // $this->Footer_Settings = (object) json_decode($this->public_data['settings']->find(6)->value, true);
        // $this->pages = (object) $this->public_data['pages'];
        // $this->categories = $this->public_data['categories'];
        // $this->products = $this->public_data['products'];
            Cache::put('publicdata',$data,60*24*365);
        }

        return $data;
    }

}
