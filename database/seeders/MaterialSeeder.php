<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {//Dekota- Galvaniz Sac- Pleksi
        $array = ['Dekota','Galveniz Sac','Pleksi'];

        foreach($array as $a){
            $m = new Material();
            $m->name = $a;
            $m->save();
        }

    }
}
