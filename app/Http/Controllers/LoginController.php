<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginSesion(Request $request){
        $request-> email;
         return view('login', ['data' =>$request]);
    }
}
