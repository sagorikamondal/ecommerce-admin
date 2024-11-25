<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product\ProductModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubOrderModel extends Model
{
    protected $table="sub_order";
    protected $primaryKey="id";

    public function productdetails(){
        return $this->belongsTo(ProductModel::class,'product_id');

     }

}
