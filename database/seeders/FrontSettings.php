<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FrontSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** Front Settings */
        if (\DB::connection()->getDatabaseName() && !Settings::find(2)) {
            Settings::create([
                'id' => 2,
                'name' => 'front',
                'value' => json_encode(
                    [
                        'header_logo' => 'logo.png',
                        'footer_logo' => 'logo.png',
                        'favicon' => 'favicon.ico',
                        'main_color' => '#cc0066',
                        'shopimg' => 'shopimg.png',
                        'second_main_color' => '#ff3366',
                        'footer_contact_info_color' => '#fdf7ac',
                        'footer_contact_info_hover_color' => '#fdf7ac',
                    ],
                    true
                ),
                'description' => "App Front Settings"
            ]);
        }
    }
}
