<?php

namespace App\Http\Controllers;

use App\Models\Sizes;
use App\Models\Types;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function calculateProductPrice($size_id, $type_id)
    {
        try {
            $size = Sizes::find($size_id);
            $type = Types::find($type_id);
            if ($size && $type) {
                $rate = $this->getExchangeRate();
                if (is_numeric($rate)) {
                    //$sizearr = explode("X", $size->name);
                    //$final_price = ($sizearr[0] * $sizearr[1] * $type->price * $rate) / 10000;
                    $final_price = ($size->price * $type->price * $rate) / 10000;
                    return $final_price;
                } else {
                    return response()->json([
                        "status" => false,
                        "message" => "Exchange rate not available",
                    ]);
                }
            } else {
                return response()->json([
                    "status" => false,
                    "message" => "Size or Type not found",
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    function getExchangeRate()
    {
        $getData = json_decode(file_get_contents('http://hasanadiguzel.com.tr/api/kurgetir'));
        return $getData->TCMB_AnlikKurBilgileri[0]->ForexSelling; // for US Dollar
    }
}
