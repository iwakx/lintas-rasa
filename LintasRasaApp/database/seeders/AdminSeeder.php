<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    User::create([
    'name' => 'Admin',
    'email' => 'admin@lintasrasa.com',
    'password' => Hash::make('12345'),
    'role' => 'admin',
    ]);

    }
}
