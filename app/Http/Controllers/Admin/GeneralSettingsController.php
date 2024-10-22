<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeneralSettingsController extends AdminController
{
    public function update(Request $request)
    {
        try {
            Validator::make($request->all(), [
                // 'language_id'=> ['required', 'exists:laguages,id', 'integer', 'max:60'],
                'site_name' => ['required', 'string'],
                'site_link' => ['required', 'string'],
                'site_https' => ['string'],
                'email' => ['required', 'string'],
                'phone' => ['required', 'string'],
                'shipping_price' => ['required'],
                'address' => ['required', 'string']
            ])->validate();
            $general_settings = Settings::where('language_id', 1)->find(1);
            $general_settings->value = json_encode(
                [
                    'site_name' => $request->site_name,
                    'site_desciption' => 'site_description',
                    'site_link' => $request->site_link,
                    'site_https' => $request->site_https ? 1 : 0,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'google_location' => null,
                    'contact_email' => null,
                    'shipping_price' => $request->shipping_price,
                    'address' => $request->address
                ],
                true
            );
            $general_settings->update();

            return response()->json([
                "status" => true,
                "message" => "General Settings Updated Successfully"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function clearCache()
    {
        try {

            $this->clearSystemCache();
            return redirect()->back()->with(['success' => "System Cache Cleared Successfully."]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['danger' => $e->getMessage()]);
        }
    }
}
