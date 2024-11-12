<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }
    public function all_user(){
        return view("all-user");
    }
    public function add_user(){
        return view("add-new-user");
    }
    
}
