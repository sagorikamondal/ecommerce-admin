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
        Schema::create('main_order', function (Blueprint $table) {
            $table->id("order_id");
           
           $table->integer("customer_id");
           $table->string("billing_name");
           $table->string("billing_address");
           $table->string("phone");
           $table->string("payment");
           $table->string("status");
           
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_order');
    }
};
