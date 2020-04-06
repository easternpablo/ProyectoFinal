<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AirlinePlane extends Model
{
    use Notifiable;

    protected $table = 'airlinesplanes';

    protected $fillable = [
        'airline_id',
        'plane_id',
    ];
}
