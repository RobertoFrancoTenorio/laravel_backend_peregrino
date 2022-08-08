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
        Schema::create('pacientetitular', function (Blueprint $table){
            $table->increments('id');
            $table->string('pac_nombres');
            $table->string('pac_primer_apellido');
            $table->string('pac_segundo_apellido');
            $table->string('pac_nombre_completo');
            $table->string('pac_curp');

            $table->string('pac_email');
            $table->string('pac_telefono');
            $table->string('pac_celular');
            $table->string('pac_estado_civil')->nullable();
            $table->string('pac_sexo')->nullable();

            $table->string('pac_pais')->nullable();
            $table->string('pac_estado')->nullable();
            $table->string('pac_municipio')->nullable();

            $table->string('pac_localidad')->nullable();
            $table->string('pac_dir_cp')->nullable();
            $table->string('pac_dir_colonia')->nullable();
            $table->string('pac_dir_calle')->nullable();
            $table->string('pac_dir_comentarios')->nullable();

            $table->string('pac_escolaridad')->nullable();
            $table->date('pac_f_nacimiento')->nullable();
            $table->string('pac_tipo')->nullable();
            $table->integer('pac_cant_adicionales')->nullable();
            $table->string('pac_parentesco')->nullable();
            $table->integer('id_titular')->nullable();

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
        Schema::dropIfExists('paciente_titular');
    }
};
