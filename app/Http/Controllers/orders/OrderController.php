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
        
        
        foreach($orders as $oder){
            // echo $oder->product_id;
            echo $oder->address->phone;
        }
     
        // return view("order-list")->with(["oders"=>$oders]);
    }
    public function order_details(){
        $product_permisson=ltrim(Auth::user()->role->product_permission,',');
       
        $permissions=explode(",",$product_permisson);
        foreach($permissions as $permission){
        if($permission=="delete"){
        
        return view("order-detail");
        }
        }

        // else{
        //    return redirect(url('/dasboard'));
        // }
    
}
    public function order_tracking(){
        return view("order-tracking");
    }

 
}
