@extends('adminlte::page')

@section('title', 'Administracion')

@section('content_header')
    <h1>Lista de categorias</h1>
@stop

@section('content')
@if (session('info'))

<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
    
@endif
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.categories.create')}}" class="btn btn-secondary">Agregar Categoria</a>
        </div>
        <div class="card-body">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                      <tr>
                          <td>{{$category->id}}</td>
                          <td>{{$category->name}}</td>
                          <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit',$category)}}">Editar</a> </td>
                          <td width="10px">
                             <form action="{{route('admin.categories.destroy',$category)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm" type="submit">Elimnar</button>
                            </form>
                          </td>
                     </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

