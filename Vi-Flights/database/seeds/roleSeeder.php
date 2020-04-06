<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class roleSeeder extends Seeder
{
    public function run()
    {
        $this->arrayRoles = array(
            array(
                'name' => 'usuario',
                'description' => 'Rol para pasajeros que solo podrán hacer reservas.',
            ),
            array(
                'name' => 'administrador',
                'description' => 'Rol para administradores que tendrán acceso total a la aplicación.',
            ),
        );

        DB::table('roles')->delete();
        foreach ($this->arrayRoles as $rol) {
            $r = new Role;
            $r->name = $rol['name'];
            $r->description = $rol['description'];
            $r->save();
        }
    }
}
