<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bundle;

class BundleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bundle::create([
            'name' => 'Morning Fitness Boost',
            'start_time' => '2026-01-01 06:00:00',
            'duration' => '01:30:00',
            'description' => 'A high‑energy morning workout bundle designed to kickstart your day.',
            'category_id' => 2, // Trainer
        ]);

        Bundle::create([
            'name' => 'Weight Loss Intensive',
            'start_time' => '2026-01-01 08:00:00',
            'duration' => '02:00:00',
            'description' => 'A structured program focused on cardio and calorie‑burning routines.',
            'category_id' => 3, // User
        ]);

        Bundle::create([
            'name' => 'Strength & Conditioning',
            'start_time' => '2026-01-01 10:00:00',
            'duration' => '01:45:00',
            'description' => 'A bundle tailored for muscle building and endurance improvement.',
            'category_id' => 2, // Trainer
        ]);

        Bundle::create([
            'name' => 'Staff Wellness Program',
            'start_time' => '2026-01-01 14:00:00',
            'duration' => '01:00:00',
            'description' => 'A wellness routine designed specifically for staff members.',
            'category_id' => 4, // Staff
        ]);
    }
}