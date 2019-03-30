<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TableRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //variable como un arreglo
        $roles = [
            'administrador',
            'editor',
            'supervisor',

        ];
        //recorremos el arreglo con un ciclo foreach
        foreach ($roles as $key => $value) {
            # code...
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
