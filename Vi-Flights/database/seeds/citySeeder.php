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
                'country_id' => '1',
                'name' => 'Madrid',
                'image' => '1585559111madrid.jpg',
            ),
            array(
                'country_id' => '1',
                'name' => 'Jerez de la Frontera',
                'image' => '1588243490jerez-frontera.jpg',
            ),
            array(
                'country_id' => '2',
                'name' => 'Hillingdon (Londres)',
                'image' => '1585488421londres.jpg',
            ),
            array(
                'country_id' => '2',
                'name' => 'Crawley (Londres)',
                'image' => '1585488421londres.jpg',
            ),
            array(
                'country_id' => '2',
                'name' => 'Stansted Mountfitchet (Londres)',
                'image' => '1585488421londres.jpg',
            ),
            array(
                'country_id' => '3',
                'name' => 'Frankfurt',
                'image' => '1586528492Frankfurt.jpg',
            ),
            array(
                'country_id' => '4',
                'name' => 'Dublín',
                'image' => '1585824010dublin.jpg',
            ),
            array(
                'country_id' => '5',
                'name' => 'Doha',
                'image' => '1585998676doha(catar).jpg',
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
