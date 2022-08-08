<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Article;
use App\Http\Resources\ArticlesResource;
use App\Http\Controllers\ArticleController;


use App\Models\Doctor;
use App\Http\Controllers\DoctorController;
use App\Http\Resources\DoctorResource;

use App\Models\PacienteTitular;
use App\Http\Controllers\PacienteTitularController;
use App\Http\Resources\PacienteTitularResource;

use App\Models\MetodoDeContacto;
use App\Http\Controllers\MetodoDeContactoController;
use App\Http\Resources\MetodoDeContactoResource;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/articles', function(){
    return ArticlesResource::collection(Article::all());
});

Route::get('/article/{id}', function($id){
    return new ArticlesResource(Article::findOrFail($id));
});

Route::post('/articles', [ArticleController::class, 'store']);

Route::put('/article/{id}', [ArticleController::class, 'update']);

Route::delete('/article/{id}', [ArticleController::class, 'destroy']);

Route::get('/article/{id}', [ArticleController::class, 'query']);

//#region Doctor
Route::get('/Doctores', function(){
    return DoctorResource::collection(Doctor::all());
});

Route::post('/Doctor', [DoctorController::class, 'store']);

Route::get('/Doctor/{id}', function($id){
    return new DoctorResource(Doctor::find($id));
});

Route::put('/Doctor/{id}', [DoctorController::class, 'update']);

Route::get('/DoctorByCurp/{curp}', [DoctorController::class, 'getDocByCURP']);

Route::get('/validaCurpDoctor/{curp}', [DoctorController::class, 'validaCurpDoctor']);

//#endregion

Route::get('/PacientesTitulares', function(){
    return PacienteTitularResource::collection(PacienteTitular::all());
});

Route::post('/PacienteTitular', [PacienteTitularController::class, 'store']);

Route::get('/PacienteTitular/{id}', function($id){
    return new PacienteTitularResource(PacienteTitular::find($id));
});

Route::put('/PacienteTitular/{id}', [PacienteTitularController::class, 'update']);

Route::put('/UpdateAdicionalesCant/{id}', [PacienteTitularController::class, 'updateAdicionales']);

Route::get('/ValidaCurp/{curp}', [PacienteTitularController::class, 'validaCurp']);

/*
    RUTAS DE METODOS DE CONTACTO
*/

Route::post('/AgregarMetodoDeContacto', [MetodoDeContactoController::class, 'store']);

Route::get('/getMetodosDeContactoDoctor/{id}', [MetodoDeContactoController::class, 'getMetodosDeContactoDoctor']);

Route::put('/updateMetodoDeContacto/{id}', [MetodoDeContactoController::class, 'update']);

Route::delete('/deleteMetodoDeContacto/{id}', [MetodoDeContactoController::class,'delete']);







