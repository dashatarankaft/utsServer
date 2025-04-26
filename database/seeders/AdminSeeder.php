<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        Admin::create([
            'username' => 'Reihan Rizz Skibidi',
            'email' => 'admin1@example.com',
            'password' => Hash::make('password123')
        ]);

        Admin::create([
            'username' => 'Fari lukman',
            'email' => 'admin2@example.com',
            'password' => Hash::make('password123')
        ]);
    }
}
