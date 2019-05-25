@extends('layouts.app')

@section('content')
    <h1>Registrar faltas</h1>

    {!! Form::open(['action' => 'faltaController@create', 'method' => 'POST']) !!}
    //
    {!! Form::close() !!}

@endsection