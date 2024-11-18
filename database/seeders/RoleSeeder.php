<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        public function run(): void {
            DB::table('roles')->insert([
                'role_name'=>"admin",
                'role_permission'=>'index,create,edit,delete',
                'product_permission'=>'index,create,edit,delete',
                'user_permission'=>'index,create,edit,delete',
                'category_permission'=>'index,create,edit,delete',
                'order_permission'=>'index,create,edit,delete'

            ]);
        }
    }

