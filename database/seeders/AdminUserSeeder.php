<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
        public function run(): void {
            DB::table('users')->insert([
                'role_id'=>1,
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('1234'),
                'status'=>'active'

            ]);
        }
    }

