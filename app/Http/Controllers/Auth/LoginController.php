<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Validator;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->app_data();
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    /**
     * Show the application loginprocess.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        try{
            $rules = [
                'email'   => 'required|email',
                'password' => 'required'
              ];
    
            $validator = Validator::make($request->all(), $rules);
    
            if ($validator->fails()) {
                return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
            }
    
            if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
            {

                $request->session()->flash('success', "Successful login");

                return response()->json([
                    "status" => 200,
                    "message" => "Successed",
                    "location"=> route('user.dashboard')
                ]);
                
            } else {
                return response()->json([
                    "status" => false,
                    "message"=> "Credentials Doesnt Match !"
                ]);
            }
            
        }catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message"=> $e->getMessage()
            ]);
        }
    }


    public function forgetPassword(){
        return view('auth.passwords.email');
    }


    public function Send_Reset_Link(Request $request){
        try{

            Validator::make($request->all(), [
                'email' => 'required|email'
            ])->validate();


            if($user = User::where('email',$request->email)->first()){

                $user->password_reset = \Str::random(225);
                $user->save();
                /** send link mail route('forget.password.reset',$user->password_reset)
                 * to the user email
                **/

            }

            return response()->json([
                "status" => true,
                "message" => "Check your email inbox"
            ]);

        }catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message"=> $e->getMessage()
            ]);
        }
    }

    
    public function Reset_Password_Show($reset_serial){
        try{

            $input['serial'] = $reset_serial;
            Validator::make($input, [
                'serial' => 'string|exists:users,password_reset'
            ])->validate();

            return view('auth.passwords.reset',$input);

        }catch(\Exception $e){

            request()->session()->flash('danger', "Something went wrong.");
            return redirect()->route('home');

        }
    }

    public function Reset_Password(Request $request){
        try{
            Validator::make($request->all(), [
                'serial' => ['required', 'string', 'exists:users,password_reset'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ])->validate();

            $user = User::where('password_reset',$request->serial)->first();
            $user->password_reset = null;
            $user->password = Hash::make($request->password);
            $user->save();

            $request->session()->flash('success', "Password changed successfully");

            return response()->json([
                "status" => 200,
                "message"=> "",
                "location"=> route('user.login')
            ]);

        }catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message"=> $e->getMessage()
            ]);
        }
    }


    /**
     * Show the application logout.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login');
    }
}
