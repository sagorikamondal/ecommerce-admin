<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_order', function (Blueprint $table) {
            $table->id();
            $table->string("order_id");
            $table->integer("product_id");
            $table->integer("customer_id");
            $table->decimal("price");
            $table->integer("quantity");
            $table->decimal("total");
          
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_order');
    }
};
