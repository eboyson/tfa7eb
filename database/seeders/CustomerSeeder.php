<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '0917-555-0101', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Juan Dela Cruz', 'email' => 'juan.delacruz@example.com', 'phone' => '0918-555-0102', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Angela Reyes', 'email' => 'angela.reyes@example.com', 'phone' => '0919-555-0103', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Paolo Garcia', 'email' => 'paolo.garcia@example.com', 'phone' => '0920-555-0104', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Liza Navarro', 'email' => 'liza.navarro@example.com', 'phone' => '0921-555-0105', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
