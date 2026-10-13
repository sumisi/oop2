<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Group::factory()->count(5)->create();

        User::factory(10)->has(Student::factory()->count(1), 'student')->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => "user",
        //     'email' => "user@example.com",
        //     'password' => "user12345678",
        // ]);

        // User::create([
        //     'name' => "user2",
        //     'email' => "user2@example.com",
        //     'password' => "user212345678",
        // ]);
    }
}
