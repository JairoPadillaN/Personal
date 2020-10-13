<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumno;
use App\Http\Requests\StoreAlumno;


class controllerAlumno extends Controller
{
    /*
    public function store(StoreAlumnos $request){
        $alumno = new Alumno();
        
        $alumno->name = $request->name;
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->correo = $request->correo;
        $alumno->edad = $request->edad;
        $alumno->materias_id = $request->materias_id;
        $alumno->descripcion = $request->descripcion;
        $alumno-save();
        return redirect()->route('alumnos.show',$alumno);
}
*/
public function _construct (Alumno $alumno){
    $this->alumno=$alumno;
}

 public function store(StoreAlumno $request){
      return $request;
      $alumno= $this->alumno->create($request->all());
      return $alumno;
      return response()->json(new Alumno($materia), 201);
  }
