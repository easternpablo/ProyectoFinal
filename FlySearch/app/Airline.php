<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Airline extends Model
{
    use Notifiable;

    protected $table = 'airlines';

    protected $fillable = [
        'iata',
        'oaci',
        'name',
        'company',
        'director',
        'headquarter',
        'airport_id',
        'image',
    ];

    /*** Muchas Aerolineas Un Aeropuerto ***/
    public function airport()
    {
        return $this->belongsTo('App\Airport','airport_id');
    }
}
