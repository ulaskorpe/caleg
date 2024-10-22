<?php

namespace App\Console\Commands;

use App\Models\Category;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class CreateCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create-categories';

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

        Category::truncate();

        $vars =  DB::connection('mysql2')->table('wp_woocommerce_attribute_taxonomies')->get();// ProductVariant::all();
        $count = $vars->count();
        $bar = $this->output->createProgressBar($count);
        Category::truncate();
        // Start the progress bar
        //$bar->start();
        foreach($vars as $var){
            echo  $var->attribute_name.PHP_EOL;
            $c = new Category();
            $c->slug =  $var->attribute_name;
            $c->name =  $var->attribute_label;
            $c->brief =  $var->attribute_label;
            $c->banner =  $var->attribute_label;
            $c->sizes =  "100x100";
            $c->status = 1;

        $c->save();


            $c->save();

//            $bar->advance();
        }

      //  $bar->finish();

        // Output a newline for better formatting
        $this->line('');

        // Optional: Output a success message
        $this->info($count.' vars progressed.');
    }
}
