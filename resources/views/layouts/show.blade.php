@extends('layouts.plantilla')
@section('title','Alumno' . $alumno)
@section('content')
<h1>Este es el perfil de {{$alumno->name}}</h1>
@endsection 