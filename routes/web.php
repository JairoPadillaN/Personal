<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumnosController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', HomeController::class);
Route::get('alumnos',[AlumnosController::class,'index']);
Route::get('alumnos/create', [AlumnosController::class, 'create']);
Route::get('alumnos/{alumno}',[AlumnosController::class, 'show']);
Route::group(['prefix'=>'api'], function (){
Route::apiResource('alumno','')
*/
Route::group(['prefix'=>'api'], function (){
Route::apiResource('alumnos', AlumnosController::class);

});



