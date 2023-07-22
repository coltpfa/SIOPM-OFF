<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => "admin",
            'email' => "test@hotmail.com",
            'password' => bcrypt('admin@123'),
            'level' => 15,
            'email_verified_at' => now(),
        ]);
    }
}
