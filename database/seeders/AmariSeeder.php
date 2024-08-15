<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AmariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Property::create([
            'property_name' => 'Amari Apartments',
            'location' => 'Abijo Gra, Lekki Peninsula, Lagos',
            'apartment_type' => '2 Bedroom Apartments',
            'price' => '#65,000,0000',
            'governors_consent' => 'No Governors Consent',
            'title' => 'C OF O',
            'feature_1' => 'Flexible Payment Plan',
            'feature_2' => 'Good Return On Investment',
            'feature_3' => 'Accessible Road',
            'feature_4' => 'Eco-Friendly Environment',
            'feature_5' => 'Serene And Comfortable',
            'feature_6' => '',
            'feature_7' => '',
            'images_1' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710796/kingsbury/amari/ABIJO_02_fyxcog.jpg',
            'images_2' => '',
            'images_3' => '',
            'images_4' => '',
            'images_5' => '',
        ]);
    }
}
