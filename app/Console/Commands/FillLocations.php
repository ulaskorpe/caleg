<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FillLocations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fill-locations';

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
        //$ps = Products::where('location','=','')->where('photo','<>','')->inRandomOrder()->limit(4)->get();
        // $i=3;
        // foreach($ps as $p){
        //     $p->location = 'middle';
        //     $p->order = $i;
        //     $p->save();
        //     $i++;
        //     echo $p['photo']."<br>";
        // }

        // die();
    }
}
