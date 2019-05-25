@extends('layouts.app')

@section('content')
    <h1>Faltas</h1>
    {{-- Este if/else tiene la funcion de revisar si la base de datos esta vacia
         si lo esta regresa el mensaje que no encontro nada en la base de datos, si 
         los registros son mayor a 0 utiliza la fucion descrita en 'FaltaController'
         para mostrarlos en esta vista.
     --}}
    @if(count($faltas) > 0)
        @foreach($faltas as $falta)
            <div class="card card-body bg-light">
                <h3><a href="/falta/{{$falta->id}}">{{$falta->asistencia}}</a></h3>
                <small>Registradas el dia {{$falta->created_at}}</small>
            </div>
        @endforeach
        {{-- Fuera de este foreach es donde se coloca las flechas de paginacion --}}
        {{$faltas->links()}}
    @else
        <p>No se encotraron faltas</p>
    @endif
@endsection