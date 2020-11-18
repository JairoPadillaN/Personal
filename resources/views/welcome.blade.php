@extends('layouts.app')

@section('title', 'dashboard')
@section('content')
<div class="container">
    <div class="row">
        <h1>Bienvenido a MiLaravel</h1>
    </div>
    <body>
        <div id="app"></div>
        <script src="{!! asset('js/app.js') !!}"></script>
    </body>
</div>
@endsection
