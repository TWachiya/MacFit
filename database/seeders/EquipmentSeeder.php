<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipment;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::create([
            'name' => 'Treadmill X200',
            'usage' => 'Used for cardio workouts including walking and running.',
            'model_no' => 'TX200-Alpha',
            'value' => 120000.00,
            'status' => 'available',
        ]);

        Equipment::create([
            'name' => 'Bench Press Pro',
            'usage' => 'Strength training for chest, shoulders, and triceps.',
            'model_no' => 'BP-500',
            'value' => 45000.00,
            'status' => 'maintenance',
        ]);

        Equipment::create([
            'name' => 'Elliptical Trainer E900',
            'usage' => 'Low-impact cardio training for full body.',
            'model_no' => 'E900-Series',
            'value' => 98000.00,
            'status' => 'unavailable',
        ]);

        Equipment::create([
            'name' => 'Dumbbell Set 2kg–20kg',
            'usage' => 'Free weight training for multiple muscle groups.',
            'model_no' => 'DB-SET-20',
            'value' => 30000.00,
            'status' => 'available',
        ]);

        Equipment::create([
            'name' => 'Rowing Machine R300',
            'usage' => 'Full-body cardio and endurance training.',
            'model_no' => 'R300-Prime',
            'value' => 85000.00,
            'status' => 'damaged',
        ]);
    }
}