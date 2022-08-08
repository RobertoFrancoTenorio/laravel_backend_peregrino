<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PacienteAdicional extends Model
{
    use HasFactory;

    protected $fillable = [
        "id", "pac_nombres", "pac_primer_apellido", "pac_segundo_apellido",
        "pac_nombre_completo", "pac_curp", "pac_email", "pac_telefono", "pac_celular",
        "pac_estado_civil", "pac_sexo", "pac_pais", "pac_estado", "pac_municipio",
        "pac_localidad", "pac_dir_cp", "pac_dir_colonia", "pac_dir_calle", "pac_dir_comentarios",
        "pac_escolaridad", "pac_f_nacimiento", "pac_tipo", "pac_parentesco", "id_titular"
    ];

    protected $table = "PacienteAdicional";
}
