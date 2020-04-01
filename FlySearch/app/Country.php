<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Country extends Model
{
    use Notifiable;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'image',
    ];
}
