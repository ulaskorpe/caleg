<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeoSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** SEO Settings */
        if (\DB::connection()->getDatabaseName() && !Settings::find(4)) {
            Settings::create([
                'id' => 4,
                'name' => 'seo',
                'value' => json_encode(
                    [
                        'meta_tags' => 'tags,tag1,tag2',
                        'meta_description' => 'meta_description',
                    ],
                    true
                ),
                'description' => "App SEO Settings"
            ]);
        }
    }
}
