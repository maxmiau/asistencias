@extends('layouts.app')

@section('content')
   <h1>{{$falta->asistencia}}</h1>
   <small>Capturada el dia  {{$falta->created_at}}</small>
    <div>
        <h3>Este es el total de faltas: {{$falta->falta}}</h3>
    </div>
@endsection