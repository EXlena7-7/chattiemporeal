<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function show(){
        return view('auth.register');  //auth ->carpeta . //register->file
    }

    public function register($request){
        
    }
}
