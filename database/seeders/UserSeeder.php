<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'isaacnbgomes@outlook.com'],
            ['name' => 'Isaac', 'email' => 'isaacnbgomes@outlook.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'heloisaoliveira@gmail.com'],
            ['name' => 'Heloísa', 'email' => 'isaacnbgomes@gmail.com', 'password' => '123456A#']
        );
    }
}