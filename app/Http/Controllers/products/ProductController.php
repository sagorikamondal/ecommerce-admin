<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\category\CategoryModel;
use App\Models\product\ProductModel;

class ProductController extends Controller
{
    public function add_product(){
        $category=CategoryModel::all();
        return view("add-product")->with(["categories"=>$category]);
    }
    public function store_product(request $request){
        $product_name=$request->product_name;
        $category_id=$request->category_id;
        $gender=$request->gender;
        $main_price=$request->main_price;
        $offer_price=$request->offer_price;
        $quantity=$request->quantity;
        $description=$request->description;
        $images=array();
        $files=$request->file("image");
        if(isset($files)){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move("assets/img",$name);
                $images[]=$name;

            }
            // $files=implode(",",$request->image);
           
        }
       

        $product_store=new ProductModel();
        $product_store->product_name=$product_name;
        $product_store->category_id=$category_id;
        $product_store->gender=$gender;
        $product_store->main_price=$main_price;
        $product_store->offer_price=$offer_price;
        $product_store->total_quantity=$quantity;
        $product_store->description=$description;
        $product_store->image=implode(",",$images);;
        $product_store->save();
        return redirect(url('/product/list-product'));
        
    }


    public function update_product(request $request){
        $update_id=$request->id;
        $product_name=$request->product_name;
        $category_id=$request->category_id;
        $gender=$request->gender;
        $main_price=$request->main_price;
        $offer_price=$request->offer_price;
        $quantity=$request->quantity;
        $description=$request->description;
        $images=array();
        $files=$request->file("image");
        if(isset($files)){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move("assets/img",$name);
                $images[]=$name;

            }
            // $files=implode(",",$request->image);
           
        }
       

        $product_store=ProductModel::find($update_id);
        $product_store->product_name=$product_name;
        $product_store->category_id=$category_id;
        $product_store->gender=$gender;
        $product_store->main_price=$main_price;
        $product_store->offer_price=$offer_price;
        $product_store->total_quantity=$quantity;
        $product_store->description=$description;
        if(isset($name)){
        $product_store->image=implode(",",$images);
        }
        $product_store->update();
        return redirect(url('/product/list-product'));
    }
}
