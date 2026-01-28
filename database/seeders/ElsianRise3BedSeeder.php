<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ElsianRise3BedSeeder extends Seeder
{
    public function run(): void
    {
        Property::create([
            'property_name' => 'Elysian Rise',
            'location' => 'Victoria-Island, Lagos',
            'description' => 'Elysian Rise by strongmas residence is  premium 13-floor luxury residential development located at 3a Musa Yaradua Street, Victoria-island, Lagos. Designed to mbody quiet luxury, exclusivity nd modern living, the development features only 29 thoughtfully curated residences, offering residents privacy, comfort ,and prestige in one of lagos most sought-after neighbourhoods.   ',
            'apartment_type' => '3-Bedroom',
            'price' => '#650,000,0000',
            'governors_consent' => 'Government Approved C of 0',
            'title' => 'Government Allocation',
            'type' => 'house',
            'feature_1' => 'Smart Home Automation with AI enabled controls',
            'feature_2' => 'Advanced security and suivelance systems',
            'feature_3' => 'Rooftop suspended infinity pools',
            'feature_4' => 'Spa, lounge, private cinema/clubhouse',
            'feature_5' => 'Fully equiped Gym',
            'feature_6' => 'Electric Vehicle Charging Station',
            'feature_7' => 'Central Water System',
            'feature_8' => '24-hours power supply with backup generators',
            'feature_9' => 'Dedicated parking on ground and first floors',
            'landmark_1' => 'Muri Okunola Park',
            'landmark_2' => 'Silverbird Galleria',
            'landmark_3' => 'Landmark Centre / Landmark Beach',
            'landmark_4' => 'Didi Museum',
            'landmark_5' => 'Civic Centre (Ozumba Mbadiwe)',
            'landmark_6' => 'Kuramo Beach',
            'payment_plan' => '18 MONTHS PAYMENT PLAN',
            'images_1' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075732/Elysian_Rise_ext2_ucn2li.jpg',
            'images_2' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075731/Elysian_Rise_Br2_vjsqzf.jpg',
            'images_3' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075728/Elysian_Rise_cinema_wr3yap.jpg',
            'images_4' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075727/Elysian_Rise_Lr2_xe3mfh.jpg',
            'images_5' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075723/Elysian_Rise_lounge_wwijfz.jpg',
        ]);
    }
}
