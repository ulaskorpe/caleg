<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** General Settings */
        if (\DB::connection()->getDatabaseName() && !Settings::find(1)) {
            Settings::create([
                'id' => 1,
                'name' => 'general',
                'value' => json_encode(
                    [
                        'site_name' => 'Laravel',
                        'site_desciption' => 'site_description',
                        'site_link' => null,
                        'site_https' => 1,
                        'email' => null,
                        'phone' => null,
                        'address' => 'some street and city/country',
                        'google_location' => null,
                        'contact_email' => null,
                        'shipping_price' => 0,
                    ],
                    true
                ),
                'description' => "App General Settings"
            ]);
        }
    }
}
