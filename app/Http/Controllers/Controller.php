<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
// use App\Models\Pages;
// use App\Models\Category;
// use App\Models\Products;

// use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Cache;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\Schema;
// use App\Models\Settings;
// use Illuminate\Support\Facades\DB;
// use Exception;
// use Illuminate\Support\Facades\URL;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // protected $public_data;
    // protected $cache_duration = 1.5; //seconds
    // protected $General_Settings;
    // protected $Front_Settings;
    // protected $Mail_Settings;
    // protected $Seo_Settings;
    // protected $Home_Settings;
    // protected $Footer_Settings;
    // protected $pages;
    // protected $categories;
    // protected $products;

    public function __construct()
    {
        // if (DB::connection()->getDatabaseName()) {
        //     $General_tables = Schema::hasTable('settings') && Schema::hasTable('pages');
        //     if ($General_tables && Settings::exists()) {
        //         $this->cache_app_data(); // caching most uses data
        //         $this->app_data(); // organize and share cached data to views and attributes
        //     }
        // }
    }

    // protected function cache_app_data()
    // {
    //     Cache::remember('public_data', $this->cache_duration, function () {
    //         $data = [];
    //         $data['settings'] = Settings::all();
    //         $data['pages'] = [
    //             'all' => Pages::all(),
    //             'active' => Pages::where('status', 1)->get()
    //         ];

    //         $data['categories'] = Schema::hasTable('category') ? Category::where('status', 1)->get() : null;
    //         $data['products'] = Schema::hasTable('products') ?  Products::where('status', 1)->get() : null;

    //         return $data;
    //     });
    // }

    protected function app_data()
    {
      //  $this->public_data = Cache::get('public_data');
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
    }

    // protected function public_data()
    // {
    //     return $this->public_data;
    // }

    // public static function get_public_data()
    // {
    //     $data = new Controller();
    //     return $data->public_data();
    // }

    // private function shareToView($key, $value)
    // {

    //     View::share($key, $value);
    // }
}
