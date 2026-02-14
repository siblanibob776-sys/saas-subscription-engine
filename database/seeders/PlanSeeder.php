<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Plan::create([
        'name' => 'Free',
        'slug' => 'free',
        'price_monthly' => 0,
        'stripe_price_id' => null,
        'is_active' => true,
    ]);

    Plan::create([
        'name' => 'Pro',
        'slug' => 'pro',
        'price_monthly' => 1000, // $10
        'stripe_price_id' => 'price_pro_monthly', // placeholder
        'is_active' => true,
    ]);

    Plan::create([
        'name' => 'Business',
        'slug' => 'business',
        'price_monthly' => 2900, // $29
        'stripe_price_id' => 'price_business_monthly', // placeholder
        'is_active' => true,
    ]);
}
