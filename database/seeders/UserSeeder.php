<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            ['username' => 'admin', 'full_name' => 'Admin User', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'claire', 'full_name' => 'Claire Mendoza', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'ramon', 'full_name' => 'Ramon Flores', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'nina', 'full_name' => 'Nina Castillo', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'leo', 'full_name' => 'Leo Bautista', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
