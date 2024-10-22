<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\Sizes;

class CategorySizeAttach extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category-size-attach';

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
        $cats = Category::all();
        $sizes  = [1,2,3];
        foreach($cats as $cat){
            echo $cat['name'];
            $cat->sizes()->detach();
            $cat->sizes()->attach($sizes);

            //$randomSizeIds = Sizes::inRandomOrder()->limit(5)->pluck('id')->toArray();

        }
    }
}
