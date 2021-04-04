
@extends('adminlte::page')

@section('title', 'Dashboard Usuarios')

@section('content_header')
   
@stop

@section('content')
<div class="card-header">
    <p class="h5">{{$user->name}}</p>
</div>
    <div class="card">
        {!! Form::model($user,['route' => ['user.update', $user], 'method' => 'put']) !!}
        <div class="col-md-3 mt-2">
        <img src="https://soprema.us/wp-content/uploads/2014/12/200x200.gif" class="img-thumbnail" alt="200">
        </div>
        <div class="card-body">            
             <div class="form-floating">
                <label for="for description">Descripcion</label>
                <textarea class="form-control" placeholder="Escriba una descripcion" id="floatingTextarea2" style="height: 100px; weight:50px;">{{$user->description}}</textarea>
              </div>
        </div>
        {!! Form::submit('Actualizar', ['class' => 'btn btn-primary mt-2']) !!}
        {!! Form::close() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop