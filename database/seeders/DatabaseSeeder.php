<?php

namespace Database\Seeders;

use App\Models\Equipment;
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
        $this->call([
            RoleSeeder::class,
        ]);
        $this->call([
            EquipmentSeeder::class
            ]);
        $this->call([
            CategorySeeder::class
        ]);
        $this->call([GymSeeder::class
        ]);
        $this->call([BundleSeeder::class
        ]);
        $this->call([SubscriptionSeeder::class
        ]);
    }

}
