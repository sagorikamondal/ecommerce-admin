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
            $table->string("role_permission")->nullable();
           $table->string("product_permission")->nullable();
           $table->string("user_permission")->nullable();
           $table->string("category_permission")->nullable();
           $table->string("order_permission")->nullable();
           
           
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
