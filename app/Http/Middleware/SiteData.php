<?php

namespace App\Http\Middleware;

use App\Http\Services\FrontEndServices;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;
use App\Models\Category;
use App\Models\City;
use App\Models\Setting;

class SiteData
{

    protected $frontEndServices;

    public function __construct(FrontEndServices $frontEndServices){
            $this->frontEndServices = $frontEndServices;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $data= Setting::all();
        $data_array = [];
        foreach($data as $d){
            $data_array[$d['key']] = $d['value'];
        }

// $data = $this->frontEndServices->getSettings();
 view()->share(['categories'=>Category::all(),'cities'=>City::orderBy('name')->get(),'data'=>$data_array]);
//  $data = Cache::get('publicdata');
//         if(!empty($data)){
//             Log::channel('data_check')->info($data);
//         }

// $response = $next($request);
// if ($response instanceof \Illuminate\View\View) {
//     // Add data to the view
//     $response->with('data', $data);
//     Log::channel('data_check')->info($data);
// }


// $array = [];
// foreach($site_data as $data ){
//     $array[$data['key']] = $data['value'];
// }







return $next($request);
 // $this->public_data = Cache::get('public_data');
        // $this->General_Settings = (object) json_decode($this->public_data['settings']->find(1)->value, true);
        // $this->Front_Settings = (object) json_decode($this->public_data['settings']->find(2)->value, true);
        // $this->Mail_Settings = (object) json_decode($this->public_data['settings']->find(3)->value, true);
        // $this->Seo_Settings = (object) json_decode($this->public_data['settings']->find(4)->value, true);
        // $this->Home_Settings = (object) json_decode($this->public_data['settings']->find(5)->value, true);
        // $this->Footer_Settings = (object) json_decode($this->public_data['settings']->find(6)->value, true);
        // $this->pages = (object) $this->public_data['pages'];
        // $this->categories = $this->public_data['categories'];
        // $this->products = $this->public_data['products'];
        // $this->shareToView('general_settings', $this->General_Settings);
        // $this->shareToView('front_settings', $this->Front_Settings);
        // $this->shareToView('seo_settings', $this->Seo_Settings);
        // $this->shareToView('home_settings', $this->Home_Settings);
        // $this->shareToView('footer_settings', $this->Footer_Settings);
        // $this->shareToView('pages', $this->pages);
        // $this->shareToView('categories', $this->categories);


       // return $next($request);
    }
}
