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
                'price' => 120.00,
                'description' => 'One of Nikes most popular tracksuits.',
                'image' => 'nike_tech_fleece.jpg',
                'category_id' => 1,
                'brand_id' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Adidas Superstar II',
                'environmental_score' => 23,
                'environmental_impact' => 'High impact on the environment',
                'price' => 120.00,
                'description' => 'One of Adidas most popular SHOES.',
                'image' => 'adidas_superstar_ii.jpg',
                'category_id' => 2,
                'brand_id' => 4,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
            
            [
                'name' => 'Ikea LAGKAPTEN / ADILS Table',
                'environmental_score' => 80,
                'environmental_impact' => 'Low impact on the environment',
                'price' => 40.00,
                'description' => 'Piece of furniture sold by Ikea.',
                'image' => 'ikea_lagkapten_adils.jpg',
                'category_id' => 3,
                'brand_id' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Patagonia Straight Fit Jeans',
                'environmental_score' => 73,
                'environmental_impact' => 'Low impact on the environment',
                'price' => 130.00,
                'description' => 'Comfortable straight fit jeans.',
                'image' => 'straight_fit_jeans.jpg',
                'category_id' => 5,
                'brand_id' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Nike Crew Neck T-Shirt',
                'environmental_score' => 45,
                'environmental_impact' => 'Medium impact on the environment',
                'price' => 25.00,
                'description' => 'Comfortable sports crew neck jogging t-shirt.',
                'image' => 'sports_crew_neck_jogging_tshirt.jpg',
                'category_id' => 6,
                'brand_id' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Adidas Performance TIRO L NECKWRM',
                'environmental_score' => 42,
                'environmental_impact' => 'Medium impact on the environment',
                'price' => 23.00,
                'description' => 'Neck warmer perfect for sporting activities and outdoor use.',
                'image' => 'adidas_performance_tiro_l_neckwrm.jpg',
                'category_id' => 4,
                'brand_id' => 4,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Ikea FADO Table lamp',
                'environmental_score' => 54,
                'environmental_impact' => 'Medium impact on the environment',
                'price' => 27.00,
                'description' => 'Stylish table lamp for home lighting.',
                'image' => 'ikea_fado_table_lamp.jpg',
                'category_id' => 3,
                'brand_id' => 1,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Patagonia Retro-X Jacket',
                'environmental_score' => 83,
                'environmental_impact' => 'Low impact on the environment',
                'price' => 220.00,
                'description' => 'Stylish and warm fleece jacket.',
                'image' => 'patagonia_retro_x_jacket.jpg',
                'category_id' => 1,
                'brand_id' => 2,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Nike Air Jordan 4 Retro Bred',
                'environmental_score' => 39,
                'environmental_impact' => 'High impact on the environment',
                                'price' => 500.00,
                'description' => 'Stylish and iconic basketball shoes.',
                'image' => 'nike_air_jordan_4_retro_bred.jpg',
                'category_id' => 2,
                'brand_id' => 3,
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

        ]);
    }
}
