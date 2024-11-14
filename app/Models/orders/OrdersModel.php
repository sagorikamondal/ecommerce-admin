<?php

namespace App\Models\orders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders\OrdersAddressModel;
use Illuminate\Database\Eloquent\Relations\HasOne;

class OrdersModel extends Model
{
    protected $table="orders";
    protected $primaryKey="id";


    public function address(){
         return $this->hasOne(OrdersAddressModel::class,'order_id');
     }
}
