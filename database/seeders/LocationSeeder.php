<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Location::create([
            'name' => 'Cappadocia',
            'image_url' => 'https://ihplb.b-cdn.net/wp-content/uploads/2021/11/Cappadocia.jpg',
            'description' => 'Experience the magical landscapes of Cappadocia.',
            'price' => 650.00,
        ]);
    }
    
}
