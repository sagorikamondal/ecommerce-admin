<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\roles\rolemodel;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }
    public function loginCheck(request $request){
        $valid=$request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(["email"=>$email,"password"=>$password])){
           return redirect(url('/dasboard'));
        }
        else{
            echo "invalid";
        }

    }

    public function logout(){
        Auth::logout();
        return redirect(url('/admin/login'));
    }
  
    
}
