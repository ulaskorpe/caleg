<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FooterSettingsController extends AdminController
{
    private $footer;
    public function __construct()
    {
        $this->footer = Settings::find(6);
    }

    public function FooterSettings()
    {
        return view('admin.settings.footer');
    }

    public function updateFooter(Request $request)
    {
        try {
            Validator::make($request->all(), [
                'footer_text' => 'required'
            ]);

            $data = (object) json_decode($this->footer->value, true);

            if ($request->status) $data->status = $request->status;
            $data->twitter_link = $request->twitter_link;
            $data->instagram_link = $request->instagram_link;
            $data->facebook_link = $request->facebook_link;
            $data->youtube_link = $request->youtube_link;
            $data->linkedin_link = $request->linkedin_link;
            $data->whatsapp_link = $request->whatsapp_link;
            $data->telegram_link = $request->telegram_link;
            $data->pinterest_link = $request->pinterest_link;
            $data->footer_text = $request->footer_text;

            $data = ['value' => json_encode($data, true)];
            $this->footer->update($data);

            return redirect()->back()->with(['success' => "Footer Updated Successfully"]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['danger' => $e->getMessage()]);
        }
    }
}
