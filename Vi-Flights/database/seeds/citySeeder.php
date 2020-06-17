<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\City;

class citySeeder extends Seeder
{
    public function run()
    {
        $this->arrayCities = array(
            array(
                'country_id' => 1,
                'name' => 'Madrid',
                'image' => 'madrid.jpg',
            ),
            array(
                'country_id' => 1,
                'name' => 'Jerez de la Frontera',
                'image' => 'jerez.jpg',
            ),
            array(
                'country_id' => 2,
                'name' => 'Hillingdon (Londres)',
                'image' => 'londres.jpeg',
            ),
            array(
                'country_id' => 2,
                'name' => 'Crawley (Londres)',
                'image' => 'londres.jpeg',
            ),
            array(
                'country_id' => 2,
                'name' => 'Stansted Mountfitchet (Londres)',
                'image' => 'londres.jpeg',
            ),
            array(
                'country_id' => 3,
                'name' => 'Frankfurt',
                'image' => 'frankfurt.jpg',
            ),
            array(
                'country_id' => 4,
                'name' => 'Dublín',
                'image' => 'dublin.jpg',
            ),
            array(
                'country_id' => 5,
                'name' => 'Doha',
                'image' => 'doha.jpg',
            ),
            array(
                'country_id' => 1,
                'name' => 'Barcelona',
                'image' => 'barcelona.jpeg',
            ),
            array(
                'country_id' => 6,
                'name' => 'Texas',
                'image' => 'texas.jpg',
            ),
        );

        DB::table('cities')->delete();
        foreach ($this->arrayCities as $ciudad) {
            $c = new City;
            $c->country_id = $ciudad['country_id'];
            $c->name = $ciudad['name'];
            $c->image = $ciudad['image'];
            $c->save();
        }
    }
}
