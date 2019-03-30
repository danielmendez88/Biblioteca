<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSlugSizePermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permiso', function (Blueprint $table) {
            //modificamos el tamaño del slug
            $table->string('slug', 200)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permiso', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
        });
    }
}
