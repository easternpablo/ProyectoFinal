<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Airport;

class airportSeeder extends Seeder
{
    public function run()
    {
        $this->arrayAirports = array(
            array(
                'iata' => 'MAD',
                'oaci' => 'LEMD',
                'name' => 'Adolfo Suárez Madrid-Barajas',
                'coordinates' => '40°28′20″N 3°33′39″O',
                'city_id' => 1,
                'type' => 'Público',
                'owner' => 'ENAIRE',
                'operator' => 'Aena',
                'image' => '1585651886madrid-airport.jpg',
            ),
            array(
                'iata' => 'XRY',
                'oaci' => 'LEJR',
                'name' => 'Jerez',
                'coordinates' => '36°44′41″N 6°03′36″O',
                'city_id' => 2,
                'type' => 'Público',
                'owner' => 'ENAIRE',
                'operator' => 'Aena',
                'image' => '1588243767airport-jerez-frontera.jpg',
            ),
            array(
                'iata' => 'LHR',
                'oaci' => 'EGLL',
                'name' => 'Londres-Heathrow',
                'coordinates' => '51°28′39″N 0°27′41″O',
                'city_id' => 3,
                'type' => 'Público',
                'owner' => 'Heathrow Airport Holdings',
                'operator' => 'Heathrow Airport Limited',
                'image' => '1585652555heathrow-airport.jpg',
            ),
            array(
                'iata' => 'STN',
                'oaci' => 'EGSS',
                'name' => 'Londres-Stansted',
                'coordinates' => '51°53′06″N 0°14′06″E',
                'city_id' => 5,
                'type' => 'Público',
                'owner' => 'Manchester Airports Group',
                'operator' => 'BAA',
                'image' => '1585825346aeropuerto-stansted.jpg',
            ),
            array(
                'iata' => 'FRA',
                'oaci' => 'EDDF',
                'name' => 'Fráncfort del Meno',
                'coordinates' => '50°02′00″N 8°34′14″E',
                'city_id' => 6,
                'type' => 'Público',
                'owner' => 'Fraport',
                'operator' => 'Fraport',
                'image' => '1586528776Frankfurt-Airport.jpg',
            ),
            array(
                'iata' => 'DUB',
                'oaci' => 'EIDW',
                'name' => 'Dublín',
                'coordinates' => '53°25′17″N 6°16′12″O',
                'city_id' => 7,
                'type' => 'Público',
                'owner' => 'Gobierno de Irlanda',
                'operator' => 'Dublin Airport Authority',
                'image' => '1585824585airport-dublin.jpg',
            ),
            array(
                'iata' => 'DOH',
                'oaci' => 'OTHH',
                'name' => 'Hamad',
                'coordinates' => '25°16′23″N 51°36′29″E',
                'city_id' => 8,
                'type' => null,
                'owner' => null,
                'operator' => 'Qatar Airways',
                'image' => '1585999335airport-hamad.jpg',
            ),
        );

        DB::table('airports')->delete();
        foreach ($this->arrayAirports as $aeropuerto) {
            $a = new Airport;
            $a->iata = $aeropuerto['iata'];
            $a->oaci = $aeropuerto['oaci'];
            $a->name = $aeropuerto['name'];
            $a->coordinates = $aeropuerto['coordinates'];
            $a->city_id = $aeropuerto['city_id'];
            $a->type = $aeropuerto['type'];
            $a->owner = $aeropuerto['owner'];
            $a->operator = $aeropuerto['operator'];
            $a->image = $aeropuerto['image'];
            $a->save();
        }
    }
}
