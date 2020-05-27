<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Airline;

class airlineSeeder extends Seeder
{
    public function run()
    {
        $this->arrayAirlines = array(
            array(
                'iata' => 'IB',
                'oaci' => 'IBE',
                'name' => 'Iberia',
                'company' => 'International Airlines Group',
                'director' => 'Luis Gallego',
                'headquarter' => 'Madrid',
                'airport_id' => 1,
                'image' => 'iberia.png',
            ),
            array(
                'iata' => 'BA',
                'oaci' => 'BAW/SHT',
                'name' => 'British Airways',
                'company' => 'International Airlines Group',
                'director' => 'Alex Cruz(CEO),Martin Broughton(Presidente)',
                'headquarter' => 'Harmondsworth',
                'airport_id' => 3,
                'image' => '1585822935british-airways.jpg',
            ),
            array(
                'iata' => 'FR',
                'oaci' => 'RYR',
                'name' => 'Ryanair',
                'company' => null,
                'director' => "Michael O'Leary y Eddie Wilson",
                'headquarter' => 'Dublín',
                'airport_id' => 4,
                'image' => '1585825984ryanair.jpg',
            ),
            array(
                'iata' => 'QR',
                'oaci' => 'QTR',
                'name' => 'Qatar Airways',
                'company' => null,
                'director' => 'Akbar Al Baker',
                'headquarter' => 'Doha',
                'airport_id' => 7,
                'image' => 'qatar-airways.png',
            ),
            array(
                'iata' => 'LH',
                'oaci' => 'DLH',
                'name' => 'Lufthansa',
                'company' => null,
                'director' => 'Carsten Spohr,Christoph Franz y Wolfgang Mayrhuber',
                'headquarter' => 'Colonia',
                'airport_id' => 5,
                'image' => '1586529271lufthansa.jpg',
            ),
        );

        DB::table('airlines')->delete();
        foreach ($this->arrayAirlines as $aerolinea) {
            $a = new Airline;
            $a->iata = $aerolinea['iata'];
            $a->oaci = $aerolinea['oaci'];
            $a->name = $aerolinea['name'];
            $a->company = $aerolinea['company'];
            $a->director = $aerolinea['director'];
            $a->headquarter = $aerolinea['headquarter'];
            $a->airport_id = $aerolinea['airport_id'];
            $a->image = $aerolinea['image'];
            $a->save();
        }
    }
}
