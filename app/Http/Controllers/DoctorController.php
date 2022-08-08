<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Log;

class DoctorController extends Controller
{
    public function index(){
        return Doctor::all();
    }

    public function store(Request $request){
        return Doctor::insert($request->all());        ;
    }

    public function show($id){
        return Doctor::show($id);
    }

    public function update(Request $request, $id){
        if(Doctor::where('id', $id)->exists()){
            $doctor = Doctor::find($id);
            $doctor->doc_nombre = $request->doc_nombre;
            $doctor->doc_primer_apellido = $request-> doc_primer_apellido;
            $doctor->doc_segundo_apellido = $request->doc_segundo_apellido;
            $doctor->doc_nombre_completo = $request->doc_nombre.' '.$request-> doc_primer_apellido.' '.$request->doc_segundo_apellido;
            $doctor->doc_cedula = $request->doc_cedula;
            $doctor->doc_curp = $request->doc_curp;
            $doctor->doc_estado = $request->doc_estado;
            $doctor->doc_municipio = $request->doc_municipio;
            $doctor->doc_dir_colonia = $request->doc_dir_colonia;
            $doctor->doc_dir_calle = $request->doc_dir_calle;
            $doctor->doc_dir_numero = $request->doc_dir_numero;
            $doctor->doc_dir_cp = $request->doc_dir_cp;
            $doctor->doc_celular_principal = $request->doc_celular_principal;
            $doctor->doc_horario_ini = $request->doc_horario_ini;
            $doctor->doc_horario_ini = $request->doc_horario_ini;
            $doctor->doc_especialidades = $request->doc_especialidades;

            $doctor->save();
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

    public function getDocByCURP($curp){
        return DB::table('doctor')->where('doc_curp', $curp)->get();
    }

    public function validaCurpDoctor($curp){
        if (DB::table('doctor')->where('doc_curp', $curp)->exists()) {
            return true;
        }
        else{
            return false;
        }
    }

}
