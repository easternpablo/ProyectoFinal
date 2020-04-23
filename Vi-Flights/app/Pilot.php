<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pilot extends Model
{
    use Notifiable;

    protected $table = 'pilots';

    protected $fillable = [
        'pilot_number',
        'nif',
        'name',
        'lastname',
        'email',
        'phone',
        'rank',
        'birth_date',
        'license_date',
        'nationality',
        'image',
    ];
}
