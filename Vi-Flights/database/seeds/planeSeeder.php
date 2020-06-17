<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Plane;

class planeSeeder extends Seeder
{
    public function run()
    {
        $this->arrayPlanes = array(
            array(
                'name' => 'Airbus A320',
                'engines' => 2,
                'length' => '37,57',
                'wingspan' => '34,10',
                'range' => '3500',
                'seats' => 171,
                'routes' => 'Corto y medio radio',
                'units' => 16,
                'image' => 'IberiaAirbus320.jpg',
                'image2' => 'IberiaMapaAirbus320.jpg',
            ),
            array(
                'name' => 'Airbus A350',
                'engines' => 2,
                'length' => '66',
                'wingspan' => '64',
                'range' => '12.300',
                'seats' => 348,
                'routes' => 'Largo radio',
                'units' => 4,
                'image' => 'IberiaAirbus350.jpg',
                'image2' => 'IberiaMapaAirbus350.jpg',
            ),
            array(
                'name' => 'Airbus A350-1000',
                'engines' => 2,
                'length' => '73,88',
                'wingspan' => '64,8',
                'range' => '14.800',
                'seats' => 440,
                'routes' => 'Largo radio',
                'units' => 15,
                'image' => 'QatarAirbus350-1000.jpg',
                'image2' => 'QatarMapaAirbus350-1000.png',
            ),
            array(
                'name' => 'Airbus A319',
                'engines' => 2,
                'length' => '33,84',
                'wingspan' => '34,09',
                'range' => '3600 - 5100',
                'seats' => 141,
                'routes' => 'Corto y medio radio',
                'units' => 16,
                'image' => 'IberiaAirbus319.jpg',
                'image2' => 'IberiaMapaAirbus319.png',
            ),
            array(
                'name' => 'Airbus A319-100',
                'engines' => 2,
                'length' => '33,8',
                'wingspan' => '34,1',
                'range' => '6700',
                'seats' => 144,
                'routes' => 'Corto y medio radio',
                'units' => 39,
                'image' => 'BritishAirwaysAirbus319-100.jpg',
                'image2' => 'BritishAirwaysMapaAirbusA319-100.jpg',
            ),
            array(
                'name' => 'Airbus A380-800',
                'engines' => 4,
                'length' => '72,7',
                'wingspan' => '79,8',
                'range' => '15.400',
                'seats' => 469,
                'routes' => 'Largo radio',
                'units' => 12,
                'image' => 'BritishAirwaysAirbus380-800.jpg',
                'image2' => 'BritishAirwaysMapaAirbus380-800.jpg',
            ),
        );

        DB::table('planes')->delete();
        foreach ($this->arrayPlanes as $avion) {
            $p = new Plane;
            $p->name = $avion['name'];
            $p->engines = $avion['engines'];
            $p->length = $avion['length'];
            $p->wingspan = $avion['wingspan'];
            $p->range = $avion['range'];
            $p->seats = $avion['seats'];
            $p->routes = $avion['routes'];
            $p->units = $avion['units'];
            $p->image = $avion['image'];
            $p->image2 = $avion['image2'];
            $p->save();
        }
    }
}
