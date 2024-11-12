<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function list_product(){
        return view("product-list");
    }
}
