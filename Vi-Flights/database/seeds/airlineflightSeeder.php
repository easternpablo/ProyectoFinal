<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\FlightAirline;

class airlineflightSeeder extends Seeder
{
    public function run()
    {
        $this->arrayFliAir = array(
            array(
                'flight_id' => 1,
                'airline_id' => 1,
            ),
            array(
                'flight_id' => 2,
                'airline_id' => 1,
            ),
        );

        DB::table('flightsairlines')->delete();
        foreach ($this->arrayFliAir as $oferta) {
            $fa = new FlightAirline;
            $fa->flight_id = $oferta['flight_id'];
            $fa->airline_id = $oferta['airline_id'];
            $fa->save();
        }
    }
}
