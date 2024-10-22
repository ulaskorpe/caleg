<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use App\Models\Sizes;
use App\Models\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    protected $admin_data;
    protected $sizes;
    protected $types;
    protected $categories;
    public function __construct()
    {
        /** App Caching Section */
        // $this->cahce_app_data(); // caching most uses data
        // $this->app_data(); // organize and share cached data to views and attributes
        // /** End App Caching Section */

        // /** Admin Caching Section */
         $this->cache_admin_data();
        // $this->admin_data();
        /** End Admin Caching Section */
    }




    protected function cache_admin_data()
    {
        //Caching the most uses data from admin dashboard
        if (DB::connection()->getDatabaseName()) {
            Cache::remember('admin_data', 24*60, function () {
                $data = [];
                $data['sizes'] = Schema::hasTable('sizes') && Sizes::exists() ? Sizes::all() : null;
                $data['types'] = Schema::hasTable('types') && Types::exists() ? Types::all() : null;
                $data['categories'] = Schema::hasTable('category') && Category::exists() ? Category::all() : null;
                return $data;
            });
        }
    }

    protected function admin_data()
    {
        //Assigning the most uses data from admin dashboard
        $this->admin_data = Cache::get('admin_data');
        $this->sizes = (object) json_decode($this->admin_data['sizes'], true);
        $this->types = (object) json_decode($this->admin_data['types'], true);
        $this->categories = (object) json_decode($this->admin_data['categories'], true);
    }

    protected function clearSystemCache()
    {
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
    }

    protected function queue($value)
    {
        Artisan::call('queue:' . $value);
    }

    protected function updateTheme()
    {
        $theme =  Session::has('theme') && Session::get('theme') == 'dark' ? 'light' : 'dark';
        Session::put('theme', $theme);
        return $theme;
    }
}
