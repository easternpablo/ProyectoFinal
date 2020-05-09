<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class FlightAirline extends Model
{
    use Notifiable;

    protected $table = 'flightsairlines';

    protected $fillable = [
        'flight_id','airline_id',
    ];
}
