<?php

namespace App\Http\Controllers\Admin;

use App\Models\FrontSettings;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use File;

class FrontSettingsController extends AdminController
{
    private $front;
    public function __construct()
    {
        $this->front = Settings::find(2);
    }

    public function HomePageUpdate(Request $request)
    {
        // this function for handle home page sections 
    }

    public function updateLogo(Request $request)
    {
        try {

            $data = (object) json_decode($this->front->value, true);

            if ($request->has('logo')) {
                $rules = [
                    'logo' => 'required', 'mimes:jpeg,jpg,png'
                ];
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return redirect()->back()->with(array('errors' => $validator->getMessageBag()->toArray()));
                }

                $logo = $request->logo;
                $logo_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $logo->getClientOriginalExtension());
                $logo->move('assets/img/', $logo_name);


                if ($data->header_logo && file_exists(public_path() . '/assets/img/' . $data->header_logo)) {
                    unlink(public_path() . '/assets/img/' . $data->header_logo);
                }
                $data->header_logo = $logo_name;

                $data = ['value' => json_encode($data, true)];

                $this->front->update($data);
            }

            return redirect()->back()->with(['success' => "Logo Updated Successfully"]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['danger' => $e->getMessage()]);
        }
    }

    public function updateFavicon(Request $request)
    {
        try {


            $data = (object) json_decode($this->front->value, true);

            if ($request->has('favicon')) {
                $rules = [
                    'favicon' => 'required', 'mimes:jpeg,jpg,png'
                ];
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return redirect()->back()->with(array('errors' => $validator->getMessageBag()->toArray()));
                }

                $favicon = $request->favicon;
                $favicon_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $favicon->getClientOriginalExtension());
                $favicon->move('assets/img/', $favicon_name);


                if ($data->favicon && file_exists(public_path() . '/assets/img/' . $data->favicon)) {
                    unlink(public_path() . '/assets/img/' . $data->favicon);
                }


                $data->favicon = $favicon_name;

                $data = ['value' => json_encode($data, true)];

                $this->front->update($data);
            }

            return redirect()->back()->with(['success' => "Favicon Updated Successfully"]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['danger' => $e->getMessage()]);
        }
    }

    public function updateShopImg(Request $request)
    {
        try {
            $data = (object) json_decode($this->front->value, true);

            if ($request->has('shopimg')) {
                $rules = [
                    'shopimg' => 'required', 'mimes:jpeg,jpg,png'
                ];
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    return redirect()->back()->with(array('errors' => $validator->getMessageBag()->toArray()));
                }

                $shopimg = $request->shopimg;
                $shopimg_name = time() . \Str::random(8) . '.' . str_replace(' ', '', $shopimg->getClientOriginalExtension());
                $shopimg->move('assets/img/', $shopimg_name);


                if ($data->shopimg && file_exists(public_path() . '/assets/img/' . $data->shopimg)) {
                    unlink(public_path() . '/assets/img/' . $data->shopimg);
                }


                if (File::exists('/assets/img/' . $data->shopimg)) File::delete('/assets/img/' . $data->shopimg);

                $data->shopimg = $shopimg_name;
                $data = ['value' => json_encode($data, true)];

                $this->front->update($data);
            }

            return redirect()->back()->with(['success' => "Shop Image Updated Successfully"]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['danger' => $e->getMessage()]);
        }
    }

    public function updateFrontStyle(Request $request)
    {
        try {

            $validator = Validator::make($request->all(), [
                'main_color' => 'required', 'string',
                'second_main_color' => 'required', 'string',
                'footer_contact_info_color' => 'required', 'string',
                'footer_contact_info_hover_color' => 'required', 'string',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with(array('errors' => $validator->getMessageBag()->toArray()));
            }

            $data = (object) json_decode($this->front->value, true);

            $data->main_color = $request->main_color;
            $data->second_main_color = $request->second_main_color;
            $data->footer_contact_info_color = $request->footer_contact_info_color;
            $data->footer_contact_info_hover_color = $request->footer_contact_info_hover_color;

            $data = ['value' => json_encode($data, true)];
            $this->front->update($data);

            return redirect()->back()->with(['success' => "Front Style Updated Successfully"]);
        } catch (\Exception $e) {

            return redirect()->back()->with(['danger' => $e->getMessage()]);
        }
    }
}
