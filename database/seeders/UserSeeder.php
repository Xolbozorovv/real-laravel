<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('root1213'),
        ]);

        User::create([
            'name' => 'User test',
            'role_id' => 2,
            'email' => 'user@gmail.com',
            'password' => Hash::make('root12131'),
        ]);
    }
}
