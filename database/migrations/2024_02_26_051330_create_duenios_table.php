<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDueniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duenios', function (Blueprint $table) {
            $table->id('idDuenio');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('correo', 50);
            $table->string('telefono', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duenios');
    }
}
