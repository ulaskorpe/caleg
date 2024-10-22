<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** Mail Settings */
        if (\DB::connection()->getDatabaseName() && !Settings::find(3)) {
            Settings::create([
                'id' => 3,
                'name' => 'mail',
                'value' => json_encode(
                    [
                        'smtp' => [
                            'smtp_host' => 'mail.laravel.com',
                            'smtp_port' => '1025',
                            'smtp_username' => null,
                            'smtp_password' => null,
                            'smtp_encryption' => null,
                            'smtp_from_email' => 'laravel@example.com',
                            'smtp_from_name' => null
                        ]
                    ],
                    true
                ),
                'description' => "App Mail Settings"
            ]);
        }
    }
}
