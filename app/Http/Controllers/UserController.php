<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
     public function getUser(){
         return "this returnes the code step by step";
     }

     public function aboutUser2(){
         return "this returnes the code step by step this is me";
     }
     public function getUserName($name){
          return "this returnes the code step by step this is {$name}";
     }
    //  now if wewant to opent any new page with controler then we did it 
     public function view($name){
        return view('view',['name'=>$name]);
     }
     // so now i gona cheack that vew is exist or not
     public function viewfinder() {
        if(View::exists('view')){
            return "view is exist";
        }else{
            return "view is not exist";
        }
     }
    


    //  now i have to passing array to the view
    public function passingarray() {
        return view('view',['name'=>['muaz','mughal','muhammad']]);
    }


    public function formdata(Request $request){
        // return request(); 
        echo $request->username;
        echo $request->email;

    }

    public function arraytValidation (Request $request){
        $request-> validation([
            'username' => 'required',
             'email' => 'required',


        ]);
        return $request;

    }
}
