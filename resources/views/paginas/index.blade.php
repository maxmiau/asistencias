@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Bienvenidos al sistema de asistencias</h1>
        <p>Este es un sistema basico de conteo de asistencias elaborado en laravel</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection