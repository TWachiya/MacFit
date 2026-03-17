<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subscription::create([
            'bundle_id' => 1,
            'user_id' => 1,
        ]);

        Subscription::create([
            'bundle_id' => 2,
            'user_id' => 2,
        ]);

        Subscription::create([
            'bundle_id' => 3,
            'user_id' => 3,
        ]);

        Subscription::create([
            'bundle_id' => 4,
            'user_id' => 1,
        ]);
    }
}
