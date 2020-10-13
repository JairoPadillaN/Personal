<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Alumnos extends Model{
    use Notifiable;
    

    protected $fillable=[
        'name',
        'nombre',
        'apellido',
        'correo',
        'edad',
        'descripcion',
        'materias_id',

    ];
}
