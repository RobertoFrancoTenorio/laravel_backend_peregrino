<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PacienteAdicional;
use Illuminate\Support\Facades\DB;


class PacienteAdicionalController extends Controller
{
    public function index(){
        return PacienteAdicional::all();
    }

    public function store(Request $request){
        return PacienteAdicional::insert($request->all());
    }

    public function show($id){
        return PacienteAdicional::show($id);
    }

    public function update(Request $request, $id){
        if(PacienteAdicional::where('id', $id)->exists()){
            $paciente = PacienteAdicional::find($id);
            $paciente->pac_nombres = $request->pac_nombres;
            $paciente->pac_primer_apellido = $request->pac_primer_apellido;
            $paciente->pac_segundo_apellido = $request->pac_segundo_apellido;
            $paciente->pac_nombre_completo = $request->pac_nombre_completo;
            $paciente->pac_curp = $request->pac_curp;
            $paciente->pac_email = $request->pac_email;
            $paciente->pac_telefono = $request->pac_telefono;
            $paciente->pac_celular = $request->pac_celular;
            $paciente->pac_estado_civil = $request->pac_estado_civil;
            $paciente->pac_sexo = $request->pac_sexo;
            $paciente->pac_pais = $request->pac_pais;
            $paciente->pac_estado = $request->pac_estado;
            $paciente->pac_municipio = $request->pac_municipio;
            $paciente->pac_localidad = $request->pac_localidad;
            $paciente->pac_dir_cp = $request->pac_dir_cp;
            $paciente->pac_dir_colonia = $request->pac_dir_colonia;
            $paciente->pac_dir_calle = $request->pac_dir_calle;
            $paciente->pac_dir_comentarios = $request->pac_dir_comentarios;
            $paciente->pac_escolaridad = $request->pac_escolaridad;
            $paciente->pac_f_nacimiento = $request->pac_f_nacimiento;
            $paciente->pac_tipo = $request->pac_tipo;
            $paciente->id_titular = $request->id_titular;

            $paciente->save();
            return response()->json([
                "message" => "Record updated successfully"
            ], 202);
        }
        else{
            return response()->json([
                'message' => "Article not found"
            ], 404);
        }
    }

    public function getAdicionales($id){
        return DB::table('pacienteadicional')->where('id_titular', $id)->get();
    }
}
