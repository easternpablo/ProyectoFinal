<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(roleSeeder::class);
        $this->call(countrySeeder::class);
        $this->call(citySeeder::class);
        $this->call(airportSeeder::class);
        $this->call(airlineSeeder::class);
        $this->call(planeSeeder::class);
        $this->call(pilotSeeder::class);
        $this->call(flightSeeder::class);
        $this->call(airlineplaneSeeder::class);
        $this->call(airlineflightSeeder::class);
    }
}
