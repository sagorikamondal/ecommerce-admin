<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\category\CategoryModel;

class ProductController extends Controller
{
    public function add_product(){
        $category=CategoryModel::all();
        return view("add-product")->with(["categories"=>$category]);
    }
}
