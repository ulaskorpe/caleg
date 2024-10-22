<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class FooterSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (\DB::connection()->getDatabaseName() && !Settings::find(6)) {
            Settings::create([
                'id' => 6,
                'name' => 'footer',
                'value' => json_encode(
                    [
                        'status' => true,
                        'twitter_link' => '#',
                        'instagram_link' => '#',
                        'facebook_link' => '#',
                        'youtube_link' => '#',
                        'linkedin_link' => '#',
                        'whatsapp_link' => '#',
                        'telegram_link' => '#',
                        'tumblr_link' => '#',
                        'pinterest_link' => '#',
                        'footer_text' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio culpa natus doloribus atque corporis? Et nihil, necessitatibus
                                          debitis dolores autem eos culpa reiciendis quo est accusamus voluptatibus id, harum nemo!',
                    ],
                    true
                ),
                'description' => "App Footer Settings"
            ]);
        }
    }
}
