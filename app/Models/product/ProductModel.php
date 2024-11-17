<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\category\CategoryModel;

class ProductModel extends Model
{
   protected $table="products";
   protected $primaryKey="id";

   public function category(){
      return $this->belongsTo(CategoryModel::class,'category_id');

   }
}
