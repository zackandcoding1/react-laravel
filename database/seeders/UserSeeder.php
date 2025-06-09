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
            ['email' => 'kcazack@outlook.com'],
            ['name' => 'Isaac', 'email' => 'kcazack@outlook.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'heloisaoliveira@gmail.com'],
            ['name' => 'Heloísa', 'email' => 'heloisaoliveira@gmail.com', 'password' => '123456A#']
        );
        User::firstOrCreate(
            ['email' => 'ana.souza@email.com'],
            ['name' => 'Ana', 'email' => 'ana.souza@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'bruno.barbosa@email.com'],
            ['name' => 'Bruno', 'email' => 'bruno.barbosa@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'camila.mendes@email.com'],
            ['name' => 'Camila', 'email' => 'camila.mendes@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'diego.martins@email.com'],
            ['name' => 'Diego', 'email' => 'diego.martins@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'eduardo.castro@email.com'],
            ['name' => 'Eduardo', 'email' => 'eduardo.castro@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'fernanda.lima@email.com'],
            ['name' => 'Fernanda', 'email' => 'fernanda.lima@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'gabriel.almeida@email.com'],
            ['name' => 'Gabriel', 'email' => 'gabriel.almeida@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'helena.carvalho@email.com'],
            ['name' => 'Helena', 'email' => 'helena.carvalho@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'igor.santos@email.com'],
            ['name' => 'Igor', 'email' => 'igor.santos@email.com', 'password' => '123456A#']
        );

        User::firstOrCreate(
            ['email' => 'juliana.rodrigues@email.com'],
            ['name' => 'Juliana', 'email' => 'juliana.rodrigues@email.com', 'password' => '123456A#']
        );
    }
}