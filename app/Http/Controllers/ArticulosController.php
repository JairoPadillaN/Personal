<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    
    public function __invoke(){

        $alumnos=laravel::table('alumnos')->select('id','name','correo','edad')-get();
        return $alumnos;

    }

}
