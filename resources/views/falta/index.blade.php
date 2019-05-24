@extends('layouts.app')

@section('content')
    <h1>Faltas</h1>
    @if(count($faltas) > 0)
        @foreach($faltas as $faltas)
            <div class="well well-lg">
                <h3>{{$faltas->asistencia}}</h3>
                <small>Registradas el dia {{$faltas->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No se encotraron faltas</p>
    @endif
@endsection