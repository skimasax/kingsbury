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
            'apartment_type' => '4 bedroom Terraces',
            'price' => '#135,000,0000',
            'governors_consent' => 'Has Governors Consent',
            'title' => 'Deed of Assignment  (Registered Survey)',
            'feature_1' => 'Fully Serviced',
            'feature_2' => 'Assigned Parking',
            'feature_3' => '24 Hours Power Supply',
            'feature_4' => 'Security with CCTV',
            'feature_5' => 'Treated Water Supply',
            'feature_6' => 'Luxury Living Spaces',
            'feature_7' => '',
            'images_1' => 'https://res.cloudinary.com/daqnlwgkp/image/upload/v1723710709/kingsbury/paul/PC_View_2_k2it5a.jpg',
            'images_2' => '',
            'images_3' => '',
            'images_4' => '',
            'images_5' => '',
        ]);
    }
    
}
