@extends('layouts.app')
{{-- Esta vista tiene la funcion de mostrar una falta y alumno en particular al ser seleccionado 
     desde el index.blade de la carpeta falta
 --}}
@section('content')
   <h1>{{$falta->asistencia}}</h1>
   <small>Capturada el dia  {{$falta->created_at}}</small>
    <div>
        <h3>Este es el total de faltas: {{$falta->falta}}</h3>
    </div>
@endsection