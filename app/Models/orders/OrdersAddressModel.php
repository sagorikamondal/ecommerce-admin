<?php

namespace App\Models\orders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersAddressModel extends Model
{
    protected $table="order_address";
    protected $primaryKey="address_id";
}
