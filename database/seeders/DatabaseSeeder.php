<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create a test user (idempotent)
        DB::table('users')->updateOrInsert(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );

    // Create sample job listings
    // Insert sample job listings (ignore duplicates)
    DB::table('job_listings')->insertOrIgnore([
            [
                'title' => 'Senior Laravel Developer',
                'company' => 'Acme Corp',
                'location' => 'Amsterdam, NL',
                'description' => 'Build and maintain web applications using Laravel 11.',
                'is_remote' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Frontend Engineer (Vue/Tailwind)',
                'company' => 'Design Studio',
                'location' => 'Remote',
                'description' => 'Create beautiful frontend experiences.',
                'is_remote' => 1,
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
