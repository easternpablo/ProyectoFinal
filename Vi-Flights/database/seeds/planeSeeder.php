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
                'image' => '1586516260A320Iberia.jpg',
                'image2' => '1586516260MapaA320Iberia.jpg',
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
                'image' => '1586517261A350Iberia.jpg',
                'image2' => '1586517261MapaA350Iberia.jpg',
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
                'image' => '1586518154A350Qatar.jpg',
                'image2' => '1586518154MapaA350Qatar.jpg',
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
                'image' => '1586523211A319Iberia.jpg',
                'image2' => '1586523211MapaIberiaA319.jpg',
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
                'image' => '1586343581airbus319-100britishairways.jpg',
                'image2' => '1586343581MapaAirbusA319-100BritishAirways.jpg',
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
                'image' => '1586523940A380-800BritishAirways.jpg',
                'image2' => '1586523940MapaA380-800BritishAirways.jpg',
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
