
@extends('adminlte::page')

@section('title', 'Dashboard Usuarios')

@section('content_header')
   
@stop

@section('content')
<a class="btn btn-primary btn-sm" href="{{route('user.edit',Auth::user())}}">Editar Perfil</a>
<div class="card-header">
    <p class="h5">{{Auth::user()->name}}</p>
</div>
<div class="row">
    <div class="col-md-4 mt-2">
        <img src="https://soprema.us/wp-content/uploads/2014/12/200x200.gif" class="img-thumbnail" alt="200">
    </div>
    <div class="col-md-8"> 
        <div class="card mt-4" style="width: 35rem;">
            <div class="card-body">
              <h5 class="card-title">Descripcion</h5>
              <p class="card-text">{{Auth::user()->description}}</p>
            </div>
          </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop