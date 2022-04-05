@extends('layouts.master')
@section('title', 'Agregar verduras')


@section('header')
    @parent
    <h2>Agregar verduras</h2>
@stop


@section('content')
<hr>
    <div class="container">
        <div class="row">
            <div class="col col-lg-5">
                <form action="{{url('guardarFormulario')}}" method="post">
                    <div class="mb-3">
                        <label for="">Verdura</label>
                         <input type="text" name="nombre" id="" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Precio</label>
                         <input type="text" name="precio" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    @if($errors->any())
                            <hr>
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
<hr>
@stop

@section('footer')
    @parent
    <h4>Gracias por visitarnos</h4>
    
@stop