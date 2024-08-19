<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(AmariSeeder::class);
        $this->call(PaulSeeder::class);
        $this->call(NathanBay250Seeder::class);
        $this->call(NathanBay300Seeder::class);
        $this->call(NathanBay500Seeder::class);
        $this->call(OliviaSeeder::class);
        
    }
}
