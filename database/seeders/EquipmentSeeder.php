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

        Equipment::create([
    'name' => 'Leg Press Machine LP800',
    'usage' => 'Lower body strength training focusing on quads, glutes, and hamstrings.',
    'model_no' => 'LP800-Max',
    'value' => 110000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Smith Machine SM400',
    'usage' => 'Guided barbell system for safe compound lifts.',
    'model_no' => 'SM400-Pro',
    'value' => 150000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Stationary Bike SB100',
    'usage' => 'Indoor cycling for cardio and endurance.',
    'model_no' => 'SB100-Cycle',
    'value' => 60000.00,
    'status' => 'maintenance',
]);

Equipment::create([
    'name' => 'Cable Crossover CC900',
    'usage' => 'Functional training for chest, arms, and shoulders.',
    'model_no' => 'CC900-Dual',
    'value' => 130000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Kettlebell Set 4kg–32kg',
    'usage' => 'Strength and conditioning for full-body dynamic movements.',
    'model_no' => 'KB-SET-32',
    'value' => 25000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Lat Pulldown Machine LPD700',
    'usage' => 'Back and upper body strength training.',
    'model_no' => 'LPD700-Elite',
    'value' => 90000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Seated Chest Press CP300',
    'usage' => 'Chest and triceps strength training.',
    'model_no' => 'CP300-Force',
    'value' => 75000.00,
    'status' => 'unavailable',
]);

Equipment::create([
    'name' => 'Battle Ropes 15m',
    'usage' => 'High-intensity conditioning and endurance training.',
    'model_no' => 'BR-15M',
    'value' => 8000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Squat Rack SR500',
    'usage' => 'Heavy lifting for squats, bench, and overhead press.',
    'model_no' => 'SR500-Iron',
    'value' => 95000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Ab Crunch Machine AC250',
    'usage' => 'Core strengthening and abdominal isolation.',
    'model_no' => 'AC250-Core',
    'value' => 40000.00,
    'status' => 'maintenance',
]);

Equipment::create([
    'name' => 'Punching Bag PB100',
    'usage' => 'Boxing, cardio, and endurance training.',
    'model_no' => 'PB100-Heavy',
    'value' => 15000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Stepper Machine ST600',
    'usage' => 'Cardio training with focus on lower body endurance.',
    'model_no' => 'ST600-Step',
    'value' => 70000.00,
    'status' => 'damaged',
]);

Equipment::create([
    'name' => 'Resistance Bands Set',
    'usage' => 'Light resistance training and mobility exercises.',
    'model_no' => 'RB-SET-Pro',
    'value' => 5000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Incline Bench IB200',
    'usage' => 'Adjustable bench for strength training and dumbbell workouts.',
    'model_no' => 'IB200-Adjust',
    'value' => 20000.00,
    'status' => 'available',
]);

Equipment::create([
    'name' => 'Glute Ham Developer GHD900',
    'usage' => 'Posterior chain training for glutes, hamstrings, and core.',
    'model_no' => 'GHD900-Power',
    'value' => 85000.00,
    'status' => 'available',
]);

    }
}