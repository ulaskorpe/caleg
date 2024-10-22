<?php

namespace App\Providers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Settings;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Observers\ProductObserver;
use App\Observers\SliderObserver;
use App\Observers\UserObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Slider::observe(SliderObserver::class);
        Products::observe(ProductObserver::class);
        User::observe(UserObserver::class);
        /** This line for solving centos server problem of max key length */
        Schema::defaultStringLength(191);
        /** End problem of max key length solution */

        Paginator::useBootstrap();
        // View::share('home', 'index');

        // $Settings = Controller::get_public_data();
        // if ($Settings) {
        //     $Settings = Controller::get_public_data()['settings'];
        //     $general_settings = (object) json_decode($Settings->find(1)->value, true);
        //     $smtp_mail_settings = (object) json_decode($Settings->find(3)->value, true)['smtp'];
        //     if ($general_settings->site_https) {
        //         URL::forceScheme('https');
        //     }

        //     config([
        //         'app.name' => $general_settings->site_name,
        //         'app.forceHttps' => $general_settings->site_https ? true : false,
        //         'app.url' => $general_settings->site_link,
        //         'mail.mailers.smtp.host' =>  $smtp_mail_settings->smtp_host,
        //         'mail.mailers.smtp.port' =>  $smtp_mail_settings->smtp_port,
        //         'mail.mailers.smtp.encryption' =>  $smtp_mail_settings->smtp_encryption,
        //         'mail.mailers.smtp.username' =>  $smtp_mail_settings->smtp_username,
        //         'mail.mailers.smtp.password' =>  $smtp_mail_settings->smtp_password,
        //         'mail.from.address' => $smtp_mail_settings->smtp_from_email,
        //         'mail.from.name' => $smtp_mail_settings->smtp_from_name,
        //     ]);
        // }
    }
}
