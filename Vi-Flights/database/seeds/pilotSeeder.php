<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Pilot;

class pilotSeeder extends Seeder
{
    public function run()
    {
        $this->arrayPilots = array(
            array(
                'pilot_number' => 'IBE001',
                'nif' => '49887410G',
                'name' => 'Alfonso',
                'lastname' => 'Rodríguez Pérez',
                'email' => 'alfonso_rodriguez@iberia.es',
                'phone' => '+34 626884217',
                'rank' => 'Comandante',
                'birth_date' => '1980-02-10',
                'license_date' => '2010-01-01',
                'nationality' => 'Española',
                'image' => '1587470231identificacion-hombre.jpg',
            ),
            array(
                'pilot_number' => 'IBE013',
                'nif' => '12345678A',
                'name' => 'Manuel',
                'lastname' => 'García García',
                'email' => 'manuelgg@iberia.com',
                'phone' => '+34 255242488',
                'rank' => 'Primer Oficial',
                'birth_date' => '1995-08-28',
                'license_date' => '2019-04-25',
                'nationality' => 'Española',
                'image' => '1587292831identificacion-hombre.jpg',
            ),
        );

        DB::table('pilots')->delete();
        foreach ($this->arrayPilots as $piloto) {
            $p = new Pilot;
            $p->pilot_number = $piloto['pilot_number'];
            $p->nif = $piloto['nif'];
            $p->name = $piloto['name'];
            $p->lastname = $piloto['lastname'];
            $p->email = $piloto['email'];
            $p->phone = $piloto['phone'];
            $p->rank = $piloto['rank'];
            $p->birth_date = $piloto['birth_date'];
            $p->license_date = $piloto['license_date'];
            $p->nationality = $piloto['nationality'];
            $p->image = $piloto['image'];
            $p->save();
        }
    }
}
