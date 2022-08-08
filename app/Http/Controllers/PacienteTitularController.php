<?php

namespace App\Http\Controllers;

use App\Models\PacienteTitular;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PacienteTitularController extends Controller
{

    public function store(Request $request){
        $paciente = $request;
        $paciente->pac_nombres = Str::upper($request->pac_nombres);
        return PacienteTitular::insert($paciente->all());
    }

    public function show($id){
        return PacienteTitular::show($id);
    }

    public function update(Request $request, $id){
        if(PacienteTitular::where('id', $id)->exists()){
            $paciente = PacienteTitular::find($id);
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
            $paciente->pac_cant_adicionales = $request->pac_cant_adicionales;
            $paciente->pac_parentesco = $request->pac_parentesco;

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

    public function updateAdicionales($id){
        if(PacienteTitular::where('id', $id)->exists()){
            $paciente = PacienteTitular::find($id);
            $paciente->pac_cant_adicionales++;
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

    public function validaCurp($curp){
        if (DB::table('pacientetitular')->where('pac_curp', $curp)->exists()) {
            return true;
        }
        else{
            return false;
        }
    }
}
