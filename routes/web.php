<?php

use App\Http\Controllers\pruebaController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', pruebaController::class);


Route::get('Helloworld', function(){
    return view('helloworld');
 });
 Route::get('investigacion', function (){
      return View::make ('investigacion'); 
});





