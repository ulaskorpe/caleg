<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }
}
