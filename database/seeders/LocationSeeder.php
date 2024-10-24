<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $location_array = [
            'top_slider','promotional','160x160','recommended','organic_food',
            'news_letter','flash_sales_today','best_sells', 'new_arrivals','shipping'
        ];
        $i=1;
        foreach($location_array as $location){
            $l = new Location();
            $l->name = $location ;
            $l->title = $location ;
            $l->show = 0;
            $l->rank = $i;
            $l->has_products = 1;
            $l->save();
            $i++;
        }
    }
}
