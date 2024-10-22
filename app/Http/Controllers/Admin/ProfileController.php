<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;

class ProfileController extends AdminController
{
    public function Profile(){
        return view('admin.profile');
    }

    public function ChangeProfile(Request $request){
        try{
            Validator::make($request->all(), [
                'password'=> ['required'],
                'username'=> ['required', 'string'],
                'email'=> ['required','email']
            ])->validate();

            if(!Hash::check($request->password, Auth::guard('admin')->user()->password)){
                return response()->json([
                    "status" => false,
                    "message" => "Current Password wrong"
                ]);
            }

            if(Auth::guard('admin')->user()->email != $request->email){
                Validator::make($request->all(), [
                    'email'=> ['required','email','unique:admins,email']
                ])->validate();
            }

            Auth::guard('admin')->user()->name = $request->username;
            Auth::guard('admin')->user()->email = $request->email;
            Auth::guard('admin')->user()->save();

            return response()->json([
                "status" => true,
                "message" => "Profile Settings Updated Successfully"
            ]);

        }catch(\Exception $e){

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);

        }
    }

    public function passChange(){
        return view('admin.change_pass');
    }

    public function ChangePassword(Request $request){
        try{
            Validator::make($request->all(), [
                'current_password'=> ['required', 'string'],
                'new_password'=> ['required_with:confirm_password','same:confirm_password','regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'],
                'confirm_password'=> ['required', 'min:6'],
            ])->validate();

            if(!Hash::check($request->current_password, Auth::guard('admin')->user()->password)){
                return response()->json([
                    "status" => false,
                    "message" => "Current Password wrong"
                ]);
            }

            Auth::guard('admin')->user()->password = Hash::make($request->new_password);
            Auth::guard('admin')->user()->save();

            return response()->json([
                "status" => true,
                "message" => "Password Changed Successfully"
            ]);

        }catch(\Exception $e){

            return response()->json([
                "status" => false,
                "message" => $e->getMessage()
            ]);

        }
    }
}
