<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Airport extends Model
{
    use Notifiable;

    protected $table = 'airports';

    protected $fillable = [
        'iata','oaci','name','coordinates','city_id','type','owner','operator','image',
    ];

    /*** Muchos Aeropuertos Una Ciudad ***/
    public function city()
    {
        return $this->belongsTo('App\City','city_id');
    }

    /*** Un Aeropuerto Muchas Aerolíneas ***/
    public function airlines()
    {
        return $this->hasMany('App\Airline');
    }

    /*** Un Aeropuerto Muchos Vuelos ***/
    public function flights()
    {
        return $this->hasMany('App\Flight');
    }
}
