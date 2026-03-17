<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gym;

class GymSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gym::create([
            'name' => 'MacFit Downtown',
            'longitude' => '36.8219',
            'latitude' => '-1.2921',
            'description' => 'A fully equipped fitness center located in the heart of the city.',
        ]);

        Gym::create([
            'name' => 'MacFit Westlands',
            'longitude' => '36.8110',
            'latitude' => '-1.2683',
            'description' => 'A modern gym offering strength, cardio, and group training sessions.',
        ]);

        Gym::create([
            'name' => 'MacFit Upperhill',
            'longitude' => '36.8172',
            'latitude' => '-1.3002',
            'description' => 'A premium training facility with personal trainers and advanced equipment.',
        ]);

        Gym::create([
            'name' => 'MacFit Karen',
            'longitude' => '36.7202',
            'latitude' => '-1.3236',
            'description' => 'A serene fitness environment ideal for beginners and professionals.',
        ]);
    }
}