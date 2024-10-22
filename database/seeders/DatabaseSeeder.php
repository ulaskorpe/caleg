<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\AdminFactory;
use Database\Factories\SettingsFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        $this->call([
            // AdminUsers::class,
            // GeneralSettings::class, // general settings id must be 1 in settings table
            // FrontSettings::class, // front settings id must be 2 in settings table
            // MailSettings::class, // mail settings id must be 3 in settings table
            // SeoSettings::class, // seo settings id must be 4 in settings table
            // HomeSettings::class,
            // PagesSettings::class,
            // FooterSettings::class,
          // TypeSeeder::class
        ]);
    }
}
