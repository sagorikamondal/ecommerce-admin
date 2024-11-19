<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\UserSignUpRequest;

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
    public function user_edit(request $request){
        $id=$request->eid;
        $roles=rolemodel::all();
        $user_record=User::find($id);
       return view('user-edit')
       ->with(['record'=>$user_record])
       ->with(['roles'=>$roles]);
    }

    public function sign_up(){
        $role_record=rolemodel::all();
        return view("sign-up")->with(['roles'=>$role_record]);
    }

    public function store_signUp(UserSignUpRequest $request){
        $name=$request->firstname.' '.$request->lastname;
        $email=$request->email;
        $password=$request->password;
        $role=$request->role;

        $store_user=new User();
        $store_user->role_id=$role;
        $store_user->name=$name;
        $store_user->email=$email;
        $store_user->password=$password;
        $store_user->save();
        if($store_user){
            $request->session()->flash('success_message',"Registarion successfull");}
           else {
           $request->session()->flash('error_message',"Not inserted!!!");
           }
           return redirect('/admin/sign-up');


    }

    public function update_user(request $request){
        $id=$request->id;
        $role_id=$request->role_id;
        $user_name=$request->user_name;
        $email=$request->email;
        $password=bcrypt($request->password);
        $status=$request->status;
        $user=User::find($id);
        $user->role_id=$role_id;
        $user->name=$user_name;
        $user->email=$email;
        $user->password=$password;
        $user->status=$status;
        $user->update();
        return redirect(url('/admin/all_user'));
    }
}
