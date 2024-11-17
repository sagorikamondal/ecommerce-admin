<?php

namespace App\Http\Controllers\orders;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders\OrdersAddressModel;
use App\Models\orders\OrdersModel;
class OrderController extends Controller
{
    public function order_list(){
        $orders=OrdersModel::where('id',1)->get();
        
        return view("order-list")->with(["orders"=>$orders]);
    }
    public function order_details(request $request){
        $order_id=$request->order_id;
      $order_details=OrdersModel::find($order_id);
         return view("order-detail")->with(['orders'=>$order_details]);
        
        // else{
        //    return redirect(url('/dasboard'));
        // }
    
}
    public function order_tracking(){
        return view("order-tracking");
    }

 
}
