<?php

namespace App\Http\Controllers\orders;
use Illuminate\Support\Facades\Auth;
use App\Models\Orders\MainOrdersModel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\orders\OrdersAddressModel;
use App\Models\orders\OrdersModel;
class OrderController extends Controller
{
    public function order_list(){
       $totalprice=0;
        $orders=MainOrdersModel::get();
        foreach($orders as $order){
        foreach($order->suborder as $total){
       $price=$total->price;
       $totalprice=+$price;
      
        }
    }
        return view("order-list")->with(["orders"=>$orders]);
    }
    public function order_details(request $request){
        $order_id=$request->order_id;
      $order_details=MainOrdersModel::find($order_id);
      foreach($order_details->suborder as $p){
        $total=$p->sum('price');
      }
    
         return view("order-detail")
         ->with(['orders'=>$order_details])
         ->with(['total'=>$total]);
        
     
}
    public function order_tracking(){
        return view("order-tracking");
    }

public function order_edit(request $request){
    $id=$request->id;
    $edit_record=MainOrdersModel::find($id);
    foreach($edit_record->suborder as $p){
        $total=$p->sum('price');
      }
    return view("edit-order")
    ->with(['orders'=>$edit_record])
    ->with(['total'=>$total]);


}

public function update_order(request $request){
    $id=$request->id;
    $update_record=MainOrdersModel::find($id);
    $update_record->status=$request->status;
    $update_record->update();

    if($update_record){
        $request->session()->flash('success_message',"Update successfull");}
        else {
        $request->session()->flash('error_message',"Not Update!!!");
        }
        return redirect('/order/order-list');
    
   

}

// public function order_delete(request $request){
//     $id=$request->id;
//     $delete_record=

// }
 
}
