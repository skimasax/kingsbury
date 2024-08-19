<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NathanBay250Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::create([
            'property_name' => 'NATHAN’S BAY (250 SQM)',
            'location' => 'Lakowe, Lagos-State',
            'description' => 'Welcome to Nathans Bay!A Waterfront estate which unfolds across a picturesque landscape with 40% dedicated to lush greenery. NATHANS BAY offers discerning individuals a range of expansive plots perfect for creating your customized masterpiece.The most Strategically located property with close proximity to great landmarks, and within the Eko theme park!Nathans Bay is an estate with quick appreciation potential, great for investors!',
            'apartment_type' => '250SQM',
            'price' => '#27,000,0000',
            'governors_consent' => '',
            'title' => 'Government Allocation',
            'type' => 'land',
            'feature_1' => 'Gym House',
            'feature_2' => 'Swimming pool',
            'feature_3' => 'Sports Arenay',
            'feature_4' => 'Eco Community',
            'feature_5' => 'Resort lifestyle environment',
            'feature_6' => 'Good Road Network',
            'feature_7' => 'Security',
            'feature_8' => '',
            'feature_9' => '',
            'landmark_1' => 'Novare Mall, Shoprite',
            'landmark_2' => 'Lekki Deep Sea Port',
            'landmark_3' => 'Dangote Refinery',
            'landmark_4' => 'Forthcoming Lekki International Airport ',
            'landmark_5' => 'Lekki Free Trade Zone',
            'landmark_6' => 'Lakowe lakes Resort',
            'payment_plan' => '12 MONTHS PAYMENT PLAN (0-3 months interest free)',
            'images_1' => 'https://images.nigeriapropertycentre.com/properties/images/2204142/0661a77831bf45-land-residential-land-for-sale-lekki-ibeju-lagos.jpg',
            'images_2' => '',
            'images_3' => '',
            'images_4' => '',
            'images_5' => '',
        ]);
    }
}
