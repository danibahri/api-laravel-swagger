<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'User 1',
            'email' => 'test1@example.com',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. Test No. 123',
            'no_tlp' => '081234567890',
        ]);

        User::factory()->create([
            'name' => 'User 2',
            'email' => 'test2@example.com',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. Test No. 123',
            'no_tlp' => '081234567890',
        ]);

        User::factory()->create([
            'name' => 'User 3',
            'email' => 'test3@example.com',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. Test No. 123',
            'no_tlp' => '081234567890',
        ]);

        User::factory()->create([
            'name' => 'User 4',
            'email' => 'test4@example.com',
            'password' => bcrypt('password'),
            'alamat' => 'Jl. Test No. 123',
            'no_tlp' => '081234567890',
        ]);
    }
}
