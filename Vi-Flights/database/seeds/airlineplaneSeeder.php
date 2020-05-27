<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\AirlinePlane;

class airlineplaneSeeder extends Seeder
{
    public function run()
    {
        $this->arrayAirPla = array(
            array(
                'airline_id' => 1,
                'plane_id' => 1,
            ),
            array(
                'airline_id' => 1,
                'plane_id' => 2,
            ),
            array(
                'airline_id' => 4,
                'plane_id' => 3,
            ),
            array(
                'airline_id' => 1,
                'plane_id' => 4,
            ),
            array(
                'airline_id' => 2,
                'plane_id' => 5,
            ),
            array(
                'airline_id' => 2,
                'plane_id' => 6,
            ),
        );

        DB::table('airlinesplanes')->delete();
        foreach ($this->arrayAirPla as $dispone) {
            $ap = new AirlinePlane;
            $ap->airline_id = $dispone['airline_id'];
            $ap->plane_id = $dispone['plane_id'];
            $ap->save();
        }
    }
}
