<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\roles\rolemodel;
use  App\Models\User;

class UserController extends Controller
{
    public function all_user(){
        $all_user=User::get();
      
        return view("all-user")->with(['users'=>$all_user]);
    }
    public function add_user(){
        $roles=rolemodel::all();
        return view("add-new-user")->with(['roles'=>$roles]);
    }

    public function store_new_user(request $request){
        $role_id=$request->role_id;
        $user_name=$request->user_name;
        $email=$request->email;
        $password=bcrypt($request->password);
        $user=new User();
        $user->role_id=$role_id;
        $user->name=$user_name;
        $user->email=$email;
        $user->password=$password;
        $user->save();
        return redirect(url('/admin/all_user'));

    }

    public function user_delete(request $request){
        $id=$request->did;
        $user_delete=User::find($id);
        $user_delete->delete();
        return redirect(url('/admin/all_user'));
    }
}
