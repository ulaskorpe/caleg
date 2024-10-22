<?php

namespace App\Console\Commands;

use App\Models\ProductVariant;
use Illuminate\Console\Command;

class FixSlugProductVariants extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fix-slug-product-variants';

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
        $vars = ProductVariant::all();//where('slug','LIKE','%//%');
        $count = $vars->count();
     //   $vars = $vars->get();
     //   $bar = $this->output->createProgressBar($count);

        // Start the progress bar
     //   $bar->start();
        foreach($vars as $var){
            echo $var['slug'].PHP_EOL;
             $txt = str_replace("<br>_","__",$var['slug']);
            // $txt = str_replace("<div_style=\"text-align:center;\">_","",$var['slug']);
            // $txt = str_replace("<br>__","", $txt);
            // $txt = str_replace("<_div>_","", $txt);
            // $var->slug = $txt;
            // $var->save();
       //     $bar->advance();
        }

      //  $bar->finish();

        // Output a newline for better formatting
        $this->line('');

        // Optional: Output a success message
        $this->info($count.' vars progressed.');
    }
}
