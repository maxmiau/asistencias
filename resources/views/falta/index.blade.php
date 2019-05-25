@extends('layouts.app')

@section('content')
    <h1>Faltas</h1>
    {{-- Este if/else tiene la funcion de revisar si la base de datos esta vacia
         si lo esta regresa el mensaje que no encontro nada en la base de datos, si 
         los registros son mayor a 0 utiliza la fucion descrita en 'FaltaController'
         para mostrarlos en esta vista.
     --}}
    @if(count($faltas) > 0)
        @foreach($faltas as $faltas)
            <div class="well well-lg">
                <h3><a href="/falta/{{$faltas->id}}">{{$faltas->asistencia}}</a></h3>
                <small>Registradas el dia {{$faltas->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No se encotraron faltas</p>
    @endif
@endsection