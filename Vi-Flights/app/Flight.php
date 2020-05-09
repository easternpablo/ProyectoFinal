<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Flight extends Model
{
    use Notifiable;

    protected $table = 'flights';

    protected $fillable = [
        'number','flight_number','origin_airport','destination_airport','boarding_time','departure_time',
        'arrival_time','boarding_gate','status','occupied_seats','flight_date','flight_time','category',
        'travel','plane_id','commander_id','co_pilot_id',
    ];

    /*** Muchos Vuelos Un Piloto y Un Copiloto ***/
    public function pilot()
    {
        return $this->belongsTo('App\Pilot');
    }

    /*** Muchos Vuelos Un Destino(Aeropuerto) y Un Origen(Aeropuerto) ***/
    public function airport()
    {
        return $this->belongsTo('App\Airport');
    }

    /*** Muchos Vuelos Un Avión ***/
    public function plane()
    {
        return $this->belongsTo('App\Plane','plane_id');
    }

    /*** Muchos Vuelos Muchas Aerolíneas ***/
    public function airlines()
    {
        return $this->belongsToMany('App\Airline','flightsairlines','flight_id','airline_id');
    }
}
