<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders\OrdersAddressModel;
use App\Models\orders\OrdersModel;
class OrderController extends Controller
{
    public function order_list(){
        $orders=OrdersModel::where('id',1)->get();
        dd($orders->address->phone);
        
        foreach($orders as $oder){
            echo $oder->product_id;
        }
     
        // return view("order-list")->with(["oders"=>$oders]);
    }
    public function order_details(){
        return view("order-detail");
    }
    public function order_tracking(){
        return view("order-tracking");
    }

 
}
