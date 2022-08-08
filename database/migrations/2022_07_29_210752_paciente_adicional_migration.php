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
        Schema::create('pacienteadicional', function (Blueprint $table){
            $table->increments('id');
            $table->string('pac_nombres');
            $table->string('pac_primer_apellido');
            $table->string('pac_segundo_apellido');
            $table->string('pac_nombre_completo');
            $table->string('pac_curp');

            $table->string('pac_email');
            $table->string('pac_telefono');
            $table->string('pac_celular');
            $table->string('pac_estado_civil');
            $table->string('pac_sexo');

            $table->string('pac_pais');
            $table->string('pac_estado');
            $table->string('pac_municipio');

            $table->string('pac_localidad');
            $table->string('pac_dir_cp');
            $table->string('pac_dir_colonia');
            $table->string('pac_dir_calle');
            $table->string('pac_dir_comentarios');

            $table->string('pac_escolaridad');
            $table->date('pac_f_nacimiento');
            $table->string('pac_tipo');
            $table->integer('id_titular');

            $table->string('pac_parentesco');

            $table->foreign('id_titular')->references('id')->on('pacientetitular');
            //$table->string('pac_medio_contacto');
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
        Schema::dropIfExists('pacienteadicional');
    }
};
