<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user =  User::create([
            'id' => 'c8846d0f-037a-4481-bdc0-43f9fe6bc3d7',
            'name' => 'Eet Elvian Setiawan',
            'username' => 'eet123',
            'password' => Hash::make('12345678'),
            'position' => 'Manager',
        ]);

        $user->createToken('auth_token')->plainTextToken;
    }
}
