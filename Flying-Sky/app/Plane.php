<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Plane extends Model
{
    use Notifiable;

    protected $table = 'planes';

    protected $fillable = [
        'name',
        'engines',
        'length',
        'wingspan',
        'range',
        'seats',
        'routes',
        'units',
        'image',
        'image2',
    ];

    /*** Muchos Aviones Muchas Aerolíneas ***/
    public function airlines()
    {
        return $this->belongsToMany('App\Airline','airlinesplanes','airline_id','plane_id');
    }
}
