<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Property::create([
            'property_name' => 'Paul’s Creek',
            'location' => 'Osapa London, Lagos',
            'description' => 'Welcome to Pauls Creek, your haven in Osapa! Nestled within a highly secured estate, this exquisite 4-bedroom terrace duplex with a BQ (Boy Quarters) offers the epitome of comfort, style, and security.',
            'apartment_type' => '4 Bedroom Terrace duplex + BQ.  130M (Shell)',
            'price' => '#180,000,0000',
            'type' => 'house',
            'governors_consent' => 'Has Governors Consent',
            'title' => 'Deed of Assignment  (Registered Survey)',
            'feature_1' => 'Fully fitted kitchen',
            'feature_2' => 'Allotted parking space',
            'feature_3' => '24 Hours Power Supply',
            'feature_4' => 'Security with CCTV',
            'feature_5' => 'Treated Water Supply',
            'feature_6' => 'Recreational Area',
            'feature_8' => 'Home automation on request',
            'feature_9' => 'Fully serviced estate',
            'landmark_1' => 'Victoria Bay 2 Estate',
            'landmark_2' => 'Pinnock Beach Estate',
            'landmark_3' => 'Bridging gaps Intl School',
            'landmark_4' => 'Enyo Filling station',
            'landmark_5' => 'Maison luxury apartments',
            'landmark_6' => '',
            'payment_plan' => '30% Initial deposit and balance spread over 18 months. ',
            'images_1' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710702/kingsbury/paul/23_rvk7xp.jpg',
            'images_2' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710715/kingsbury/paul/PC_View_3_my9xee.jpg',
            'images_3' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710704/kingsbury/paul/25_wj4yfg.jpg',
            'images_4' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710726/kingsbury/paul/E_ikmu20.jpg',
            'images_5' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710728/kingsbury/paul/G_imoecg.jpg',
        ]);
    }
    
}
