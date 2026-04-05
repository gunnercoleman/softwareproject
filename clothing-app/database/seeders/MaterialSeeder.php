<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::insert([
            [
                'name' => 'Linen',
                'environmental_impact' => 'Low water usage, biodegradable',
                'description' => 'A natural fiber made from flax, known for being breathable and eco-friendly.',
                'image' => 'linen.jpg',
            ],

            [
                'name' => 'Nylon',
                'environmental_impact' => 'Non-biodegradable, fossil fuel based',
                'description' => 'A strong synthetic fiber used in clothing and industrial applications.',
                'image' => 'nylon.jpg',
            ],

            [
                'name' => 'Bamboo',
                'environmental_impact' => 'Generally low impact, but processing can be chemical-heavy',
                'description' => 'A fast-growing plant used to create soft, breathable fabrics.',
                'image' => 'bamboo.jpg',
            ],

            [
                'name' => 'Leather',
                'environmental_impact' => 'High water usage, animal agriculture impact',
                'description' => 'A durable material made from animal hides, often used in fashion and furniture.',
                'image' => 'leather.jpg',
            ],

            [
                'name' => 'Recycled Polyester',
                'environmental_impact' => 'Reduces plastic waste, but still releases microplastics',
                'description' => 'Made from recycled plastic bottles, reducing reliance on virgin materials.',
                'image' => 'recycled_polyester.jpg',
            ],

            [
                'name' => 'Hemp',
                'environmental_impact' => 'Low water usage, improves soil health',
                'description' => 'A sustainable plant-based fiber that grows quickly and requires minimal resources.',
                'image' => 'hemp.jpg',
            ],

            [
                'name' => 'Acrylic',
                'environmental_impact' => 'Non-biodegradable, fossil fuel based',
                'description' => 'A synthetic fiber similar to wool, often used as a cheaper alternative.',
                'image' => 'acrylic.jpg',
            ],

            [
                'name' => 'Silk',
                'environmental_impact' => 'Moderate impact, involves silkworm farming',
                'description' => 'A luxurious natural fiber known for its smooth texture and sheen.',
                'image' => 'silk.jpg',
            ],

            [
                'name' => 'Organic Cotton',
                'environmental_impact' => 'Lower pesticide use, more sustainable farming',
                'description' => 'Cotton grown without synthetic pesticides or fertilizers.',
                'image' => 'organic_cotton.jpg',
            ],

            [
                'name' => 'Viscose (Rayon)',
                'environmental_impact' => 'Chemical processing, deforestation concerns',
                'description' => 'A semi-synthetic fiber made from wood pulp, soft but environmentally controversial.',
                'image' => 'viscose.jpg',
            ],

            [
                'name' => 'Tencel (Lyocell)',
                'environmental_impact' => 'Low water usage, closed-loop production process',
                'description' => 'A sustainable fiber made from wood pulp using an eco-friendly process.',
                'image' => 'tencel.jpg',
            ],

            [
                'name' => 'Cashmere',
                'environmental_impact' => 'High environmental impact due to overgrazing and resource use',
                'description' => 'A soft and luxurious fiber made from the undercoat of cashmere goats.',
                'image' => 'cashmere.jpg',
            ],

            [
                'name' => 'Jute',
                'environmental_impact' => 'Very low environmental impact, biodegradable and renewable',
                'description' => 'A natural plant fiber often used for bags, ropes, and eco-friendly packaging.',
                'image' => 'jute.jpg',
            ],

            [
                'name' => 'Spandex (Elastane)',
                'environmental_impact' => 'Non-biodegradable, fossil fuel based',
                'description' => 'A highly elastic synthetic fiber used to add stretch to clothing.',
                'image' => 'spandex.jpg',
            ],

            [
                'name' => 'Recycled Nylon',
                'environmental_impact' => 'Reduces waste but still synthetic and energy-intensive',
                'description' => 'Nylon made from recycled materials like fishing nets and fabric waste.',
                'image' => 'recycled_nylon.jpg',
            ],            
        ]);
    }
}
