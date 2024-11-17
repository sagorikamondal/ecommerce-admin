<?php

namespace App\Http\Controllers\roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\roles\rolemodel;

class RolesController extends Controller
{
    public function add_role(){
        return view("create-role");
    }
    public function store_role(request $request){
        $role_name=$_POST['role_name'];
        if(isset($_POST['role'])){
            $role=implode(",",$_POST['role']);
        }
        else{
            $role="";
        }
        if(isset($_POST['user'])){
            $user=implode(",",$_POST['user']);
        }
        else{
            $user="";
        }
        if(isset($_POST['product'])){
            $product=implode(",",$_POST['product']);
        }
        else{
            $product="";
        }
        if(isset($_POST['category'])){
            $category=implode(",",$_POST['category']);
        }
        else{
            $category="";
        }
        if(isset($_POST['order'])){
            $order=implode(",",$_POST['order']);
        }
        else{
            $order="";
        }

        $role_store=new rolemodel();
        $role_store->role_name=$role_name;
        $role_store->product_permission=$product;
        $role_store->role_permission=$role;
        $role_store->user_permission=$user;
        $role_store->category_permission=$category;
        $role_store->order_permission=$order;
        $role_store->save();

        return redirect(url('/roles/all_role'));
        

    }
    public function all_role(){
        $all_role=rolemodel::all();
        return view("all-roles")->with(["roles"=>$all_role]);
    }

    public function delete_role(request $request){
        $delete_id=$request->id;
        $delete_record=rolemodel::find($delete_id);
        $delete_record->delete();
        return redirect(url('/roles/all_role'));
    }
    public function edit_role(request $request){
        $edit_id=$request->id;
        $edit_record=rolemodel::find($edit_id);
        return view('edit-role')->with(['role_edit'=>$edit_record]);
       
    }
}
