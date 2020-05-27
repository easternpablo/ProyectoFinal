<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Flight;

class flightSeeder extends Seeder
{
    public function run()
    {
        $this->arrayFlights = array(
            array(
                'number' => 1,
                'flight_number' => 'IB0405',
                'origin_airport' => 2,
                'destination_airport' => 1,
                'boarding_time' => '17:40:00',
                'departure_time' => '18:00:00',
                'arrival_time' => '18:55:00',
                'boarding_gate' => null,
                'arrival_gate' => null,
                'status' => 'En espera',
                'occupied_seats' => 0,
                'flight_date' => '2020-10-14',
                'flight_time' => '00:45:00',
                'category' => 'Regional',
                'travel' => 'Ida',
                'plane_id' => 1,
                'commander_id' => 1,
                'co_pilot_id' => 2,
            ),
            array(
                'number' => 1,
                'flight_number' => 'IB0406',
                'origin_airport' => 1,
                'destination_airport' => 2,
                'boarding_time' => '21:40:00',
                'departure_time' => '22:00:00',
                'arrival_time' => '22:55:00',
                'boarding_gate' => null,
                'arrival_gate' => null,
                'status' => 'En espera',
                'occupied_seats' => 0,
                'flight_date' => '2020-10-18',
                'flight_time' => '00:45:00',
                'category' => 'Regional',
                'travel' => 'Vuelta',
                'plane_id' => 1,
                'commander_id' => 1,
                'co_pilot_id' => 2,
            ),
        );

        DB::table('flights')->delete();
        foreach ($this->arrayFlights as $vuelo) {
            $f = new Flight;
            $f->number = $vuelo['number'];
            $f->flight_number = $vuelo['flight_number'];
            $f->origin_airport = $vuelo['origin_airport'];
            $f->destination_airport = $vuelo['destination_airport'];
            $f->boarding_time = $vuelo['boarding_time'];
            $f->departure_time = $vuelo['departure_time'];
            $f->arrival_time = $vuelo['arrival_time'];
            $f->boarding_gate = $vuelo['boarding_gate'];
            $f->arrival_gate = $vuelo['arrival_gate'];
            $f->status = $vuelo['status'];
            $f->occupied_seats = $vuelo['occupied_seats'];
            $f->flight_date = $vuelo['flight_date'];
            $f->flight_time = $vuelo['flight_time'];
            $f->category = $vuelo['category'];
            $f->travel = $vuelo['travel'];
            $f->plane_id = $vuelo['plane_id'];
            $f->commander_id = $vuelo['commander_id'];
            $f->co_pilot_id = $vuelo['co_pilot_id'];
            $f->save();
        }
    }
}
