<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;


class SeederTablaAlquiler extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alquiler')->insert([
            'id_cliente_alquiler' => users('id'),
            'id_patinete_alquiler' => patinetes('id_patinete'),
            'fecha_inicio' => now(),
           ]);
    }
}
