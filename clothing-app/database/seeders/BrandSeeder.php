<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        Brand::insert([
            [
                'name' => 'Ikea',
                'environmental_score' => 85,
                'environmental_impact' => 'Minimal impact on the environment',
                'description' => 'A popular furniture brand known for its sustainable practices and business model.',
                'image' => 'ikea.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Patagonia',
                'environmental_score' => 70,
                'environmental_impact' => 'Moderate impact on the environment',
                'description' => 'A well-known brand with a focus on eco-friendly materials and products.',
                'image' => 'patagonia.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Nike',
                'environmental_score' => 35,
                'environmental_impact' => 'High impact on the environment due to use of non-sustainable materials',
                'description' => 'A clothing brand known for its iconic sneakers and advertising.',
                'image' => 'nike.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Adidas',
                'environmental_score' => 40,
                'environmental_impact' => 'Moderate impact on the environment',
                'description' => 'A popular sports brand known for its athletic wear and footwear.',
                'image' => 'adidas.jpg',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
        ]);


    }
}
