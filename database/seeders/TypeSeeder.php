<?php

namespace Database\Seeders;

use App\Models\Types;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
       for($i=0;$i<10;$i++){
        $t= new Types();
        $t->name = $faker->word();
        $t->price = rand(10,100)*10;
        $t->save();
       }
    }
}
