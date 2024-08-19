<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OliviaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'property_name' => 'OLIVIA COURTS',
            'location' => 'Amore Street, off freedom way, Lekki phase 1, Lagos',
            'description' => 'Welcome to Olivia Courts, an exquisite residence nestled in the heart of Lekki Phase 1, where luxury meets comfort. Discover the epitome of sophistication within our stunning 2-bedroom apartments, meticulously designed to elevate your living experience. From contemporary elegance to unmatched amenities, Olivia Courts invites you to indulge in a lifestyle of opulence and tranquility.',
            'apartment_type' => '2 Bedroom Apartments',
            'price' => '#100,000,0000',
            'governors_consent' => '',
            'title' => 'Deed of Assignment  (Registered Survey)',
            'type' => 'house',
            'feature_1' => '⁠High Elite Security',
            'feature_2' => 'Elevator',
            'feature_3' => '24hrs Electricity Supply',
            'feature_4' => 'Great accessibility',
            'feature_5' => ' ⁠24hrs CCTV',
            'feature_6' => 'Treated Water Supply',
            'feature_7' => '⁠Ample parking lot',
            'feature_8' => '⁠Fully fitted Kitchen',
            'feature_9' => 'Heat Extractor ',
            'landmark_1' => 'The Dome Church',
            'landmark_2' => 'CIS International school',
            'landmark_3' => 'Rennee Supermarket',
            'landmark_4' => 'Ultima Studios',
            'landmark_5' => 'Amore Gardens Resort',
            'landmark_6' => 'Bella Residences',
            'payment_plan' => ' 50% down payment  (Spread the balance for up to 4 months INTEREST FREE)',
            'images_1' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710920/kingsbury/Olivia/OLIVIA_COURTS_Scene_2_1_ab33uw.jpg',
            'images_2' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710926/kingsbury/Olivia/OLIVIA_COURTS_Scene_2_fm9dq8.jpg',
            'images_3' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710923/kingsbury/Olivia/OLIVIA_COURTS_Scene_5_q20yrt.jpg',
            'images_4' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710907/kingsbury/Olivia/OLIVIA_COURTS_Scene_1_1_ld5ncu.jpg',
            'images_5' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710917/kingsbury/Olivia/OLIVIA_COURTS_Scene_4_rq3pbo.jpg',
        ]);
    }
}
