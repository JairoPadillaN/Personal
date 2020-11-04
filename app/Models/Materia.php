<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alumno;

class Materia extends Model
{
protected $fillable=['title'];

public function alumnos(){
    return $this->hasMany(Alumno::class);
}

}
