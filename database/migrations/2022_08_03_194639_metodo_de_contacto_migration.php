<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metododecontacto', function (Blueprint $table){
            $table->increments('id');
            $table->string('doc_metodo');
            $table->string('doc_telefono_aux');
            $table->string('doc_horario');
            $table->integer('id_doctor');
            $table->string('estatus_metodo_de_contacto');

            $table->foreign('id_doctor')->references('id')->on('doctor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metododecontacto');
    }
};
