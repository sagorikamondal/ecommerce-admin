<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\category\CategoryModel;

class CategoryController extends Controller
{
    public function add_category(){
        return view("new-category");
    }

    public function store_category(request $request){
        $category_name=$request->category_name;
        $file=$request->file("image");
        if(isset($file)){
            $file_name=$file->getClientOriginalName();
            $file->move("/assets/img/",$file_name);
        }
        $icon=$request->file('icon');
        if(isset($icon)){
            $icon_name=$icon->getClientOriginalName();
            $icon->move("/assets/img/",$icon_name);

        }
        $category=new CategoryModel();
        $category->category_name=$category_name;
        $category->image=$file_name;
        $category->icon=$icon_name;
        $category->save();
        return redirect(url('/category/list-category'));


    }
    
    public function list_category(request $request){
        if(isset($_GET['search'])){
            $category_name=$_GET['search'];
            $all_category=CategoryModel::where('category_name','LIKE',"%$category_name%")->get();

        }
        else{
        $all_category=CategoryModel::all();
        }
        return view("category-list")->with(["categories"=>$all_category]);
    }

    public function delete_category(request $request){
        $id=$request->did;
        $category_delete=CategoryModel::find($id);
        unlink("assets/img/".$category_delete->image);
        $category_delete->delete();
    }
    public function edit_category(request $request){
        $id=$request->eid;
        $category_edit=CategoryModel::find($id);
        return view("Category-edit")->with(["category"=>$category_edit]);
       
    }

    public function update_category(request $request){
        $id=$request->id;
        $category_name=$request->category_name;
        $file=$request->file("image");
        if(isset($file)){
            $file_name=$file->getClientOriginalName();
            $file->move("assets/img/",$file_name);
        }
         $icon=$request->file('icon');
        if(isset($icon)){
            $icon_name=$icon->getClientOriginalName();
            $icon->move("/assets/img/",$icon_name);

        }
        $category=CategoryModel::find($id);
        $category->category_name=$category_name;
        if(isset($file_name)){
        $category->image=$file_name;
        }
        if(isset($icon_name)){
            $category->icon=$icon_name;
        }
        $category->update();
        return redirect(url('/category/list-category'));


    }
}
