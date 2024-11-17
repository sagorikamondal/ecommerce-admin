<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product\ProductModel;
use  App\Models\category\CategoryModel;

class ListProductController extends Controller
{
    public function list_product(){
        $product_list=ProductModel::get();
        return view("product-list")->with(['product_lists'=>$product_list]);
    }

    public function delete_product(request $request){
        $id=$request->id;
        $products_delete=ProductModel::find($id);
        $images=explode(",",$products_delete->image);
        foreach($images as $image){
            unlink('assets/img/'.$image);

        }
        $products_delete->delete();
        return redirect(url('/product/list-product'));
       

    }

    public function edit_product(request $request){
        $id=$request->id;
        $products_edit=ProductModel::find($id);
        $category=CategoryModel::all();
        return view("product-edit")
        ->with(["list"=>$products_edit])
        ->with(["categories"=>$category]);

    }
}
