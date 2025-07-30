<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SerenityGardens500Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'property_name' => 'Serenity Gardens,Elerangbe',
            'location' => 'Elerangbe along the Lekki-Epe Expressway, Lagos-State',
            'description' => 'Serenity Gardens is a premium buy and build estate designed for families seeking tranquility, sustainability and long-term value. It offers a perfect blend of modern living , green spaces , and strong investment potential.',
            'apartment_type' => '500SQM',
            'price' => '#30,000,0000',
            'governors_consent' => 'Government Approved C of 0',
            'title' => 'Government Allocation',
            'type' => 'land',
            'feature_1' => 'Sustainable Living',
            'feature_2' => 'Perfect For Families',
            'feature_3' => 'Government Approved C of 0',
            'feature_4' => 'Investor Worthy',
            'feature_5' => 'Flexible Payment Plan',
            'feature_6' => '',
            'feature_7' => '',
            'feature_8' => '',
            'feature_9' => '',
            'landmark_1' => 'Omu Resort',
            'landmark_2' => 'Eleganza Plaza',
            'landmark_3' => 'Pan Africa University',
            'landmark_4' => 'Forthcoming Lekki International Airport ',
            'landmark_5' => '',
            'landmark_6' => '',
            'payment_plan' => '18 MONTHS PAYMENT PLAN',
            'images_1' => 'https://images.nigeriapropertycentre.com/properties/images/2204142/0661a77831bf45-land-residential-land-for-sale-lekki-ibeju-lagos.jpg',
            'images_2' => '',
            'images_3' => '',
            'images_4' => '',
            'images_5' => '',
        ]);
    }
}
