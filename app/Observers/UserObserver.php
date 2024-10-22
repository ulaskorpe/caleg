<?php

namespace App\Observers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreatedEmail;
use App\Mail\UserEmailUpdate;

use App\Models\User;
class UserObserver
{
    public function created(User $user){

  
        //Log::channel('data_check')->info($user->email.":".$txt);
                $link = url('/confirm/'.$user['OTP']);
     
            Mail::to($user['email'])->send(new UserCreatedEmail($user['name'],$link));
    }


    public function saved(User $user){
            if($user->isDirty('new_email')){
                if($user['new_email']!=null){
                $link = url('/eposta-guncelleme/'.$user['remember_token']);
     
                Mail::to($user['new_email'])->send(new UserEmailUpdate($user['name'],$link));
                }
            }
    }
}
