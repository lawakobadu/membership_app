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
        $plans = [
            [
                'name' => 'Basic',
                'slug' => 'basic',
                'stripe_plan' => 'price_1OFtuRIckMbKAEtzRmKvT8l2',
                'price' => 50,
                'description' => 'Ini paket basic'
            ],
            [
                'name' => 'Middle',
                'slug' => 'middle',
                'stripe_plan' => 'price_1OFtuoIckMbKAEtzOCVftLC9',
                'price' => 130,
                'description' => 'Ini paket middle'
            ],
            [
                'name' => 'Advance',
                'slug' => 'advance',
                'stripe_plan' => 'price_1OFtvBIckMbKAEtzuVDzwChE',
                'price' => 250,
                'description' => 'Ini paket advance'
            ]
        ];

        foreach ($plans as $plan){
            Plan::create($plan);
        }
    }
}
