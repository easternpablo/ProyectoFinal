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
                'image' => 'british-airways.jpg',
            ),
            array(
                'iata' => 'FR',
                'oaci' => 'RYR',
                'name' => 'Ryanair',
                'company' => null,
                'director' => "Michael O'Leary y Eddie Wilson",
                'headquarter' => 'Dublín',
                'airport_id' => 4,
                'image' => 'ryanair.png',
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
                'image' => 'lufthansa.jpg',
            ),
            array(
                'iata' => 'IB/LV/VK',
                'oaci' => 'IBE/BOS/FOO',
                'name' => 'Level',
                'company' => 'International Airlines Group',
                'director' => 'Fernando Candela',
                'headquarter' => 'Madrid',
                'airport_id' => 8,
                'image' => 'level.jpg',
            ),
            array(
                'iata' => 'VY',
                'oaci' => 'VLG',
                'name' => 'Vueling',
                'company' => 'International Airlines Group',
                'director' => 'Javier Sánchez-Prieto',
                'headquarter' => 'Barcelona',
                'airport_id' => 8,
                'image' => 'vueling.png',
            ),
            array(
                'iata' => 'VS',
                'oaci' => 'VIR',
                'name' => 'Virgin Atlantic Airways',
                'company' => 'Virgin Group',
                'director' => 'Shai Weiss',
                'headquarter' => 'Crawley',
                'airport_id' => 3,
                'image' => 'virgin_atlantic.jpg',
            ),
            array(
                'iata' => 'AA',
                'oaci' => 'AAL',
                'name' => 'American Airlines',
                'company' => 'American Airlines Group',
                'director' => 'Doug Parker',
                'headquarter' => 'Fort Worth, Texas',
                'airport_id' => 9,
                'image' => 'american-airlines.jpg',
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
