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
                'image' => '1585421964españa.jpg',
            ),
            array(
                'name' => 'Reino Unido',
                'image' => '1585423365gran-bretaña.jpg',
            ),
            array(
                'name' => 'Alemania',
                'image' => '1585568325alemania.jpg',
            ),
            array(
                'name' => 'Irlanda',
                'image' => '1585823607irlanda.jpg',
            ),
            array(
                'name' => 'Catar',
                'image' => '1585998060catar.jpg',
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
