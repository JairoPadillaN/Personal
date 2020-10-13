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
*/public function _construct (Alumno $alumno){
    $this->alumno=$alumno;
}

public function store(Alumnos $request){
    return $request;
    $alumno= $this->alumno->create($request->all());
    return $alumno;
    return response()->json(new Alumno($materia), 201);
}

  public function index() {

      $alumnos = Alumno::all();
      return $alumnos;

      return view('alumnos.index');
          
  }
  public function create(){
      return view('alumnos.create');
  }
  public function show($id){
      $alumno = Alumno::find($id);
      return $alumno;
      return view ('alumnos.show', compact('alumno'));
  }

  

}