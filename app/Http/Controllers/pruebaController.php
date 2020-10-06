<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pruebaController extends Controller
{
    public function __invoke()
    {
        $Alumnos=array(
            'nombre'=>'Pedro',
            'apellido'=>'Martinez',
            'email'=>'all22141169',
            'edad'=>22,
            );
            return response ()->json($Alumnos);

    }
}
