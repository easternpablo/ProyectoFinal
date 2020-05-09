<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Role extends Model
{
    use Notifiable;

    protected $table = 'roles';

    protected $fillable = [
        'name','description',
    ];

    /*** Un Rol Muchos Usuarios ***/
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
