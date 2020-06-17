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
                'image' => 'airport-madrid.jpg',
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
                'image' => 'airport-jerez.jpg',
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
                'image' => 'airport-heathrow.jpg',
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
                'image' => 'airport-stansted.jpg',
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
                'image' => 'airport-frankfurt.jpg',
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
                'image' => 'airport-dublin.jpg',
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
                'image' => 'airport-hamad.jpg',
            ),
            array(
                'iata' => 'BCN',
                'oaci' => 'LEBL',
                'name' => 'Josep Tarradellas Barcelona-El Prat',
                'coordinates' => '41°17′49″N 2°04′42″E',
                'city_id' => 9,
                'type' => 'Público',
                'owner' => 'ENAIRE',
                'operator' => 'Aena',
                'image' => 'airport-barcelona.jpg',
            ),
            array(
                'iata' => 'DFW',
                'oaci' => 'KDFW',
                'name' => 'Dallas-Fort Worth',
                'coordinates' => '32°53′49″N 97°02′17″O',
                'city_id' => 10,
                'type' => 'Público',
                'owner' => 'Dallas y Fort Worth',
                'operator' => null,
                'image' => 'airport-dallas.jpg',
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
