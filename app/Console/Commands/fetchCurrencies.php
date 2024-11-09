<?php

namespace App\Console\Commands;

use App\Models\Currency;
use Carbon\Carbon;
use Illuminate\Console\Command;

class fetchCurrencies extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch-currencies';

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
        $today = Carbon::parse(now())->format('Y-m-d');
        
        $currencies = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
        foreach($currencies as $currencyData){
 
$crossOrder = (string) $currencyData['CrossOrder'];
$kod = (string) $currencyData['Kod'];
$currencyCode = (string) $currencyData['CurrencyCode'];
 
$unit = (string) $currencyData->Unit;
$isim = (string) $currencyData->Isim;
$currencyName = (string) $currencyData->CurrencyName;
$forexBuying = (float) $currencyData->ForexBuying;
$forexSelling = (float) $currencyData->ForexSelling;
$banknoteBuying = (float) $currencyData->BanknoteBuying;
$banknoteSelling = (float) $currencyData->BanknoteSelling;


$c = Currency::where('date','=',$today)->where('code','=',$currencyCode)->first();
if(empty($c)){
    $c = new Currency();
}

$c->name = $isim ;
$c->code = $kod ;
$c->buying = $banknoteBuying ;
$c->selling = $banknoteSelling ;
$c->forex_buying = $forexBuying ;
$c->forex_selling = $forexSelling ;
$c->date = $today ;
$c->save();
 
echo "Cross Order: $crossOrder\n";
echo "Kod: $kod\n";
echo "Currency Code: $currencyCode\n";
echo "Unit: $unit\n";
echo "Isim: $isim\n";
echo "Currency Name: $currencyName\n";
echo "Forex Buying: $forexBuying\n";
echo "Forex Selling: $forexSelling\n";
echo "Banknote Buying: $banknoteBuying\n";
echo "Banknote Selling: $banknoteSelling\n";

        }
   
    }
}
