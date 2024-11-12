<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function add_category(){
        return view("new-category");
    }
    public function list_category(){
        return view("category-list");
    }
}
