<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Location;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductLocationFill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product-location-fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::table('product_location')->truncate();
        
        $locations = Location::where('show','=',1)->where('has_products','=',1)->get();
        foreach($locations as $location){
            $products = Products::whereNotNull('photo')->inRandomOrder()->limit(rand(1,4)*2)->get();
                $p_array = [];
            echo $location['name'].PHP_EOL;
            $order =1;
            foreach($products as $p){
                echo $p['name'].PHP_EOL;
                $p_array[]=$p['id'];
                DB::table('product_location')->insert([
                    'location_id' => $location['id'],
                    'product_id'  => $p['id'],
                    'rank'       => $order,
                ]);
                $order++;

            }
          //  $location->products()->attach($p_array);

        }
    }
}
