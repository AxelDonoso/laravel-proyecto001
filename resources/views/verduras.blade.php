@extends('layouts.master')
@section('title', 'Listado de verduras')


@section('header')
    @parent
    <h2>Listado de verduras</h2>
@stop


@section('content')

<div>
@foreach($verduras as $verdura)
        <p>{{ $verdura }}</p>
    @endforeach
</div>
    <hr>
    <a href="{{action('App\Http\Controllers\VerdurasController@agregar')}}">Agregar</a>
    <a href="{{action('App\Http\Controllers\VerdurasController@agregar')}}">editar</a>

    <a href="{{route('eliminarVerdura')}}">eliminar</a>
    
@stop

@section('footer')
    @parent
    <h4>Gracias por visitarnos</h4>
    
@stop