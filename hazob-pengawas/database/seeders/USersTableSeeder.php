<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['email' => 'user1@example.com', 'password' => Hash::make('password123'), 'name' => 'User One'],
            ['email' => 'user2@example.com', 'password' => Hash::make('password234'), 'name' => 'User Two'],
            ['email' => 'user3@example.com', 'password' => Hash::make('password345'), 'name' => 'User Three'],
        ]);
    }
    
}
