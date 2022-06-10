<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Spatie

use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //patinetes
            'ver-patinetes',
            'crear-patinetes',
            'editar-patinetes',
            'borrar-patinetes',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
