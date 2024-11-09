<?php

namespace App\Console\Commands;

use App\Models\Products;
use App\Models\Comment;
use Faker\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MakeDumbComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make-dumb-comments';

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
        DB::table('comments')->truncate();


    $faker = Factory::create();
        $cc= 0;
        $this->info("creating comments...");
        $products = Products::where('id','>',0);
        $count = $products->count();
        $this->output->progressStart($count);
        $products = $products->get();
        foreach($products as $product){

            $rand= rand(1,5);
            $cc+=$rand;
            // for($i=0;$i<$rand;$i++){
            //      Comment::create( ['name' => $faker->name(),
            //     'title' => $faker->sentence(),
            //     'comment' => $faker->paragraph(),
            //     'rating' => $faker->numberBetween(1, 5), // Assuming rating is between 1 and 5
            //     'status'=>1,
            //         'product_id'=>$product['id']
            //     ]
            // );

            // }
            Comment::factory()->count($rand)->create([
                'product_id' => $product['id'],
            ]);
        //    Comment::factory()->count($rand)->create();
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();

        $this->info($cc." Comments seeded successfully!");
        //
    }
}
