<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlvionsCourtSeeder extends Seeder
{
    public function run(): void
    {
        Property::create([
            'property_name' => 'Avions Court 2',
            'location' => 'Ikota-GRA',
            'description' => 'Avions Court 2 is an unprecedented residential masterpiece in Ikota GRA.These apartments are tailored to meet your highest standards with excellently designed luxury homes, that brings comfort and appreciation over time.',
            'apartment_type' => '4-Bedroom Semi-Detached',
            'price' => '#140,000,0000',
            'governors_consent' => 'Government Approved C of 0',
            'title' => 'Government Allocation',
            'type' => 'house',
            'feature_1' => 'Treated Water',
            'feature_2' => 'Gated Estate',
            'feature_3' => 'Integrated Sound System',
            'feature_4' => 'Service Quarters',
            'feature_5' => '24hrs Security',
            'feature_6' => 'Flood, Smoke and Gas Detention System',
            'feature_7' => '',
            'feature_8' => '',
            'feature_9' => '',
            'landmark_1' => 'Ikota Shopping Complex',
            'landmark_2' => 'Circle Mall',
            'landmark_3' => 'Lekki Conservation Centre',
            'landmark_4' => 'Elegushi Beach',
            'landmark_5' => 'Nike Art Gallery (Lekki)',
            'landmark_6' => 'Lekki-Ikoyi Link Bridge',
            'payment_plan' => '18 MONTHS PAYMENT PLAN',
            'images_1' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075744/Avions_Court_EXTERIOR_VIEW_1_hq09vi.jpg',
            'images_2' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075742/Avions_Court_Interior_2_uel1de.jpg',
            'images_3' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075741/Avions_Court_Interior_3_v1daxw.jpg',
            'images_4' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075741/Avions_Court_Interior_3_v1daxw.jpg',
            'images_5' => 'https://res.cloudinary.com/dimduwf6e/image/upload/v1769075758/DSC04535b_gi5liv.jpg',
        ]);
    }
}
