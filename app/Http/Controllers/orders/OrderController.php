<?php

namespace App\Http\Controllers\orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\oders\OderAddressModel;
use App\Models\oders\OdersModel;
class OrderController extends Controller
{
    public function order_list(){
        $oders=OderAddressModel::find(1)->oder;
       
        return view("oder-list")->with(["oders"=>$oders]);
    }
    public function order_details(){
        return view("oder-detail");
    }
    public function order_tracking(){
        return view("oder-tracking");
    }

 
}
