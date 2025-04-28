<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name'=> 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
            'phone_number' => '0799183692'
        ]);
        User::create([
            'name'=> 'test',
            'email' => 'test@test.com',
            'role' => 'user',
            'password' => Hash::make('password'),
            'phone_number' => '0799183692'
        ]);
    }
}
