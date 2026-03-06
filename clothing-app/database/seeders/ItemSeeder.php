<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
 {
        $currentTimestamp = Carbon::now();

        Item::insert([
            [
                'name' => 'Nike Tech Fleece',
                'environmental_score' => 23,
                'environmental_impact' => 'High impact on the environment',
                'description' => 'One of Nikes most popular tracksuits.',
                'image' => 'nike_tech_fleece.jpg',
                'category_id' => 1,
                'brand_id' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Adidas',
                'environmental_score' => 23,
                'environmental_impact' => 'High impact on the environment',
                'description' => 'One of Nikes most popular tracksuits.',
                'image' => 'nike_tech_fleece.jpg',
                'category_id' => 1,
                'brand_id' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],            


        ]);
    }
}
