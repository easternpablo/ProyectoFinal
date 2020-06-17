<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Country;

class countrySeeder extends Seeder
{
    public function run()
    {
        $this->arrayCountries = array(
            array(
                'name' => 'España',
                'image' => 'españa.jpg',
            ),
            array(
                'name' => 'Reino Unido',
                'image' => 'reino-unido.jpg',
            ),
            array(
                'name' => 'Alemania',
                'image' => 'alemania.jpg',
            ),
            array(
                'name' => 'Irlanda',
                'image' => 'irlanda.jpg',
            ),
            array(
                'name' => 'Catar',
                'image' => 'catar.png',
            ),
            array(
                'name' => 'America',
                'image' => 'america.png',
            ),
        );

        DB::table('countries')->delete();
        foreach ($this->arrayCountries as $pais) {
            $p = new Country;
            $p->name = $pais['name'];
            $p->image = $pais['image'];
            $p->save();
        }
    }
}
