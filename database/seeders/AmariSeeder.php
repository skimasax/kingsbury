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
           'property_name' => 'Amari Apartments, Abijo',
            'location' => 'Abijo Gra, Lekki Peninsula, Lagos',
            'description' => '',
            'apartment_type' => '2 Bedroom Apartments',
            'price' => '#57,750,0000',
            'governors_consent' => 'No Governors Consent',
            'title' => 'C OF O',
            'type' => 'house',
            'feature_1' => 'All Rooms En-suite',
            'feature_2' => 'Ample Parking Space',
            'feature_3' => 'Fully Fitted Kitchen',
            'feature_4' => 'Eco-Friendly Environment',
            'feature_5' => 'Green Areas',
            'feature_6' => 'Visitors Restroom',
            'feature_7' => 'Pre-Installed Electrical Conduits',
            'feature_8' => 'Smart-Home Ready Units',
            'feature_8' => 'Perimeter Fencing',
            'landmark_1' => 'Novare Mall',
            'landmark_2' => 'Sky Mall',
            'landmark_3' => 'Corona Schools',
            'landmark_4' => 'Green Springs',
            'landmark_5' => 'Omu Resorts',
            'landmark_6' => 'Lufasi Park',
            'payment_plan' => 'Up to 12Months',
            'images_2' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710796/kingsbury/amari/ABIJO_02_fyxcog.jpg',
            'images_1' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710818/kingsbury/amari/Master_Bedroom_02_1_fozwkd.jpg',
            'images_3' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710806/kingsbury/4point/LivingRoom_Dining_CamView_030000-standard-height-2300px_nseez5.jpg',
            'images_4' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710736/kingsbury/amari/Living_ROom_1_1_cwbeij.jpg',
            'images_5' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710749/kingsbury/amari/Living_ROom_05_1_iyzf8k.jpg',
        ]);
    }
}
