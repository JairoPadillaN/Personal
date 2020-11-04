<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;

class Alumno extends Model
{
    public function findByEmail($email){
        return static::where(compact('email'))->first();
    }

    public function materia(){
        return $this->belongsTo(Materia::class);
    }
}
