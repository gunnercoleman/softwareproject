<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentTimestamp = Carbon::now();

        Category::insert([
            [
                'name' => 'Coats',

                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Shoes',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Furniture',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Accessories',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Jeans',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],

            [
                'name' => 'Shirts',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp
            ],
        ]);
    }
}
