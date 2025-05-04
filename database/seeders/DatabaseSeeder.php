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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@globalsurvindo.com',
            'password' => Hash::make('6lobal5urvindo')
        ]);

        User::factory()->create([
            'name' => 'Fajar Ramadana',
            'email' => 'fajar@globalsurvindo.com',
            'password' => Hash::make('6lobal5urvindo')
        ]);
    }
}
