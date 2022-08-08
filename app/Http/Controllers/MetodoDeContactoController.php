<?php

namespace App\Http\Controllers;

use App\Models\MetodoDeContacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetodoDeContactoController extends Controller
{
    public function index(){
        return MetodoDeContacto::all();
    }

    public function store(Request $request){
        return MetodoDeContacto::insert($request->all());
    }

    public function update(Request $request, $id){
        if(MetodoDeContacto::where('id',$id)->exists()){
            $metodo = MetodoDeContacto::find($id);

            $metodo->doc_metodo = $request->doc_metodo;
            $metodo->doc_telefono_aux = $request->doc_telefono_aux;
            $metodo->doc_horario = $request->doc_horario;
            $metodo->estatus_metodo_de_contacto = $request->estatus_metodo_de_contacto;

            $metodo->save();

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

    public function getMetodosDeContactoDoctor($id){
        return DB::table('metododecontacto')->where('id_doctor', $id)->where('estatus_metodo_de_contacto', 'activo')->get();
    }

    public function destroy($id)
    {
        if(MetodoDeContacto::where('id', $id)->exists()){
            $article = MetodoDeContacto::find($id);

            $article->delete();
            return response()->json([
                "message" => "Record deleted successfully"
            ], 202);
        }
        else{
            return response()->json([
                'message' => "Article not found"
            ], 404);
        }
    }

}
