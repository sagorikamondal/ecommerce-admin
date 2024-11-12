<?php

namespace App\Models\oders;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OderAddressModel extends Model
{
    protected $table="oder_address";
    protected $primaryKey="oder_id";

    public function oder(): Hasmany{
        return $this->hasmany(OdersModel::class,"order_id");
    }
}
