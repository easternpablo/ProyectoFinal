<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class City extends Model
{
    use Notifiable;

    protected $table = 'cities';

    protected $fillable = [
        'country_id','name','image',
    ];

    /*** Muchas Ciudades Un País ***/
    public function country()
    {
        return $this->belongsTo('App\Country','country_id');
    }

    /*** Una Ciudad Muchos Aeropuertos ***/
    public function airports()
    {
        return $this->hasMany('App\Airport');
    }
}
