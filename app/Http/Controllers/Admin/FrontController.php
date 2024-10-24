<?php

namespace App\Http\Controllers\Admin;

use App\Models\FailedJobs;
use App\Models\Location;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Setting;
use Exception;

use App\Traits\HttpResponses;
class FrontController extends AdminController
{

    use HttpResponses;
    public function dashboard()
    {

        return view('admin.dashboard');
    }

    public function FrontSettings()
    {

        // $data['homeset'] = $this->Home_Settings;
        // $data['products'] = $this->products;
        return view('admin.settings.front', ['products'=>Products::select('id','name')->get()]);
    }

    public function generalSettings()
    {
      //  $data['generalset'] = $this->General_Settings;
        return view('admin.settings.webGeneral', []);
    }

    public function generalLocationsList($page=0){

 

        //$per_page= 100;
   
        $locations = Location::where('id','>',0)->orderBy('rank') ;
       
        $locations_count  = $locations->count();

       // $locations =  $locations->skip($per_page*$page)->limit(10)->orderBy('created_at','DESC')->get();

      //  $page_count  = ceil($setting_count/$per_page);

        $data = ['locations'=>$locations->get(),'locations_count'=>$locations_count];

        return  view('admin.settings.locations_list',$data);
    }


    public function generalLocations()
    {
      //  $data['generalset'] = $this->General_Settings;
        return view('admin.settings.locations', []);
    }
    public function locationShow($id){
        $l = Location::find($id);
        $l->show=($l['show']==1)?0:1;
        $l->save();


        return response()->json(['message'=>'visibility changed','status'=>'success']);
    }

    public function locationTitle($id,$title){
        
        $l = Location::find($id);
        $l->title=$title;
        $l->save();


        return response()->json(['message'=>'title updated','status'=>'success']);
    }

    public function locationHasProducts($id){
        $l = Location::find($id);
        $l->has_products=($l['has_products']==1)?0:1;
        $l->save();


        return response()->json(['message'=>'has_products changed','status'=>'success']);
    }

    public function locationChangeRank($id,$rank){
        $l = Location::find($id);

        // if($l['rank'] > $rank){
        //     Location ::where('id', '!=', $l['id'])
        //            ->where('rank','<=',$l['rank'])
        //            ->where('rank','>',$l['rank'])
        //            ->increment('rank',1);
        //    }else{
              
        //     Location ::where('id', '!=', $l['id'])
        //               ->where('rank','>',$l['rank'])
        //               ->where('rank','<=',$rank)
          
        //     ->decrement('rank',1);
        //    }
   

           if($rank>$l['rank']){
            Location::where('id', '!=', $l['id'])
                ->where('rank','>',$l['rank'])
                ->where('rank','<=',$rank)->decrement('rank',1);
        }else{
            Location::where('rank','<',$l['rank'])
                ->where('rank','>=',$rank)
                ->where('id', '!=', $l['id'])
                ->increment('rank',1);
        }  
        $l->rank = $rank;
        $l->save();
        return response()->json("ok");


    }
    
    public function generalSettingsList($page=0){

        // for($i=0;$i<1000;$i++){
        //     $c = new Setting();
        //     $c->key = 'k'.$i;
        //     $c->value = randomPassword(16,0);
        //     $c->type = 'text';
        //     $c->save();
        // }

        $per_page= 5;
   
        $settings = Setting::where('id','>',0) ;
       
        $setting_count  = $settings->count();

        $settings =  $settings->skip($per_page*$page)->limit(10)->orderBy('created_at','DESC')->get();

        $page_count  = ceil($setting_count/$per_page);

        $data = ['page_count'=>$page_count,'settings'=>$settings,'page'=>$page];

        return  view('admin.settings.settings_data',$data);
    }

    public function SliderSettings($selected=0)
    {

        $topSliders= Slider::where('location','=','top')->orderBy('order');
        $topCount = $topSliders->count()+1;
        $topSliders = $topSliders->get();



        $bottomSliders= Slider::where('location','=','bottom')->orderBy('order') ;
        $bottomCount = $bottomSliders->count() +1 ;
        $bottomSliders = $bottomSliders->get();
        // $data['homeset'] = $this->Home_Settings;
        // $data['products'] = $this->products;
        return view('admin.settings.slider', ['selected'=>$selected,'top_sliders'=>$topSliders,'bottom_sliders'=>$bottomSliders,'submit_form'=>false,'topCount'=>$topCount,'bottomCount'=>$bottomCount]);
    }

    public function LogoSettings()
    {
      //  $data['homeset'] = $this->Front_Settings;
        return view('admin.settings.logo', []);
    }

    public function FaviconSettings()
    {
      //  $data['homeset'] = $this->Front_Settings;
        return view('admin.settings.favicon', []);
    }

    public function StyleSettings()
    {
      //  $data['homeset'] = $this->Front_Settings;
        return view('admin.settings.style', []);
    }

    public function ShopImgSettings()
    {
     //   $data['homeset'] = $this->Front_Settings;
        return view('admin.settings.shopimg', []);
    }

    public function emailSMTP()
    {
   //     $data['generalset'] = (object) $this->Mail_Settings->smtp;
        return view('admin.settings.email.smtp');
    }

    public function emailJobs()
    {

        return view('admin.settings.email.jobs');
    }

    public function emailFailedJob()
    {
        // $data['homeset'] = $this->Front_Settings;
        // if (FailedJobs::first()) {
        //     request()->session()->flash('warning', 'Make sure of SMTP configration, and resend failed emails again!');
        // }
        return view('admin.settings.email.failedJobs' );
    }


    public function ChangeTheme()
    {
        try {
            $theme = $this->updateTheme();
            return response()->json([
                "status" => true,
                "message" => "Theme changed successfully",
                "theme" => $theme
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);
        }
    }

    public function createSetting(){
        return view("admin.settings.create_settings");
    }
    private $allowed_array = ['jpg', 'jpeg','png','gif'];

    public function createSettingPost(Request $request){
        try{
            if (!empty($request['id'])) {
                $data = Setting::find($request['id']);
                if(!empty($request->hasFile('image'))){
                    $file = $request->file('image');
                    $ext = findExtension($file->getClientOriginalName());
                    if (in_array($ext, $this->allowed_array)) {
                 
                     
                            $path = public_path("assets/images/site_data");
                           unlink($path."/".$data['value']);
                        $filename = fixname($request['key']). "_" . date('YmdHis') . "." . findExtension($file->getClientOriginalName());
                        $file->move($path, $filename);
        
                        $data->value = $filename;
                         
           
                    }else{
                        return  $this->error(['wrong format'],"" ,400);
                    }
                }else{
                    if($request['type']=='text'){
                        $data->value = $request['value'];
                    }else{
                        $data->value = $data['value'];
                    }
                    
                }
               // $data->type = $data['type'];
            }else{
                $data = new Setting();

                if(!empty($request->hasFile('image'))){
                    $file = $request->file('image');
                    $ext = findExtension($file->getClientOriginalName());
                    if (in_array($ext, $this->allowed_array)) {
                 
                     
                            $path = public_path("assets/images/site_data");
                        
                        $filename = fixname($request['key']). "_" . date('YmdHis') . "." . findExtension($file->getClientOriginalName());
                        $file->move($path, $filename);
        
                        $data->value = $filename;
                          
           
                    }else{
                        return  $this->error(['wrong format'],"" ,400);
                    }
                }else{
                    if($request['type']=='text'){
                        $data->value = $request['value'];
                    }else{
                        return  $this->error(['select file'],"" ,400);
                    }
                    
                }
                $data->type = $request['type'];
            }

            
            $data->key = $request['key'];
           
        
   
            $data->save();

            return  $this->success([''],(!empty($request['id'])?'data updated':'data created') ,200);
         }catch (Exception $e){
            // return response()->json(['error' => $e->getMessage()], 500);
             return  $this->error([''], $e->getMessage() ,500);
         }
    }

    public function updateSetting($id){
        return view("admin.settings.update_setting",['setting'=>Setting::find($id)]);
    }

 
    public function deleteSetting($id){
        $setting = Setting::find($id);
        if($setting['type']=='image'){
            $path = public_path("assets/images/site_data");
            unlink($path."/".$setting['value']);
        }
        $setting->delete();
        return response()->json(['message'=>'deleted','status'=>'success']);
    }
    public function checkKey($key,$id=0){
        $ch = Setting::where('key','=',$key)->where('id','<>',$id)->first();
        if(!empty($ch)){
        return response()->json("key exists");
    }else{
        return response()->json("ok");
    }
        
    }
}

