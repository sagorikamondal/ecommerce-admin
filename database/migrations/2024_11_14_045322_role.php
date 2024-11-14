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
        Schema::create('roles', function (Blueprint $table) {
            $table->id("role_id");
            $table->string("role_name");
            $table->string("role_permission");
           $table->string("product_permission");
           $table->string("user_permission");
           $table->string("category_permission");
           $table->string("order_permission");
           
           
           $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
