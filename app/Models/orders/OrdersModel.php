<?php

namespace App\Models\orders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\orders\OrdersAddressModel;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\product\ProductModel;

class OrdersModel extends Model
{
    protected $table="orders";
    protected $primaryKey="id";


    public function address(){
         return $this->hasOne(OrdersAddressModel::class,'order_id');
     }

     public function product(){
        return $this->belongsTo(ProductModel::class,'product_id');

     }
}
