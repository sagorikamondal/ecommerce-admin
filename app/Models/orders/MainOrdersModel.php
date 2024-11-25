<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product\ProductModel;
use  App\Models\Orders\SubOrderModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
class MainOrdersModel extends Model
{
    protected $table="main_order";
    protected $primaryKey="order_id";

    public function suborder(){
        return $this->Hasmany(SubOrderModel::class,'order_id');

     }
     public function productdetails(){
        return $this->belongsTo(ProductModel::class,'product_id');

     }
}