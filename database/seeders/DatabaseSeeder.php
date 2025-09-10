<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
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
            'first_name' => 'hamed',
            'last_name' => 'ajaj',
            'email' => 'test@example.com',
        ]);

        Job::factory(30)->create();
        Employer::factory(30)->create();
    }
}
