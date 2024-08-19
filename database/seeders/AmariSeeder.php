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
            'description' => '',
            'apartment_type' => '2 Bedroom Apartments',
            'price' => '#65,000,0000',
            'governors_consent' => 'No Governors Consent',
            'title' => 'C OF O',
            'type' => 'house',
            'feature_1' => 'Flexible Payment Plan',
            'feature_2' => 'Good Return On Investment',
            'feature_3' => 'Accessible Road',
            'feature_4' => 'Eco-Friendly Environment',
            'feature_5' => 'Serene And Comfortable',
            'feature_6' => '',
            'feature_7' => '',
            'feature_8' => '',
            'feature_8' => '',
            'landmark_1' => '',
            'landmark_2' => '',
            'landmark_3' => '',
            'landmark_4' => '',
            'landmark_5' => '',
            'landmark_6' => '',
            'payment_plan' => '',
            'images_2' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710796/kingsbury/amari/ABIJO_02_fyxcog.jpg',
            'images_1' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710818/kingsbury/amari/Master_Bedroom_02_1_fozwkd.jpg',
            'images_3' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710806/kingsbury/4point/LivingRoom_Dining_CamView_030000-standard-height-2300px_nseez5.jpg',
            'images_4' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710736/kingsbury/amari/Living_ROom_1_1_cwbeij.jpg',
            'images_5' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710749/kingsbury/amari/Living_ROom_05_1_iyzf8k.jpg',
        ]);
    }
}
