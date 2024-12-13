<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(['name' => 'Cuci Kering', 'price_per_kg' => 5000]);
        Service::create(['name' => 'Cuci Setrika', 'price_per_kg' => 8000]);
        Service::create(['name' => 'Setrika Saja', 'price_per_kg' => 3000]);
    }
}
