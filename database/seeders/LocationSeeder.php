<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run()
    {
        $locations = [
            ['city' => 'New York', 'state' => 'NY', 'country' => 'USA'],
            ['city' => 'San Francisco', 'state' => 'CA', 'country' => 'USA'],
            ['city' => 'Cairo', 'state' => 'Cairo', 'country' => 'Egypt'],
            ['city' => 'Berlin', 'state' => 'Berlin', 'country' => 'Germany'],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
