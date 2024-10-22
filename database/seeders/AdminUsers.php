<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (\DB::connection()->getDatabaseName() && !Admin::exists()) {
            Admin::factory()->create();
        }
    }
}
