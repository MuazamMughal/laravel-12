<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function loginSesion(Request $request){
    //     echo $request;
        
    // }
//now ther i put data in session
    public function loginSesion(Request $request){
        $request->session()->put('email',$request->input('email'));
        $request->session()->put('password',$request->input('password'));
       
        return redirect('view');
    }

    public function logout(Request $request){
        session()->pull('email');
        session()->pull('password');
        
        return redirect('view');
    }
}