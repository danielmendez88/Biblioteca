<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class TablePermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //debe de buscar el modelfactory llamado permiso utilizando eloquent
        factory(Permiso::class)->times(8)->create();
    }
}
