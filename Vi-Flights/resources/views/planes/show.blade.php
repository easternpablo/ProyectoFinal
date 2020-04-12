@extends('layouts.master')
@section('titulo','Gestionar aviones')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@index') }}">Flota</a></li>
          <li class="breadcrumb-item active" aria-current="page">Aviones</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <h2>Gestión Aviones</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($planes as $plane)
              <tr>
                <td> {{ $plane->name }} </td>
                <td><img src="{{ action("PlanesController@getImage",['image'=>$plane->image]) }}" alt="Avión" height="30px" width="110px"/></td>
                <td>
                    <div class="btn-group">
                        <a href="{{ action('PlanesController@showDetail',['id'=>$plane->id]) }}"><button type="button" class="btn btn-info ml-2">Ver</button></a>
                        <button type="button" class="btn btn-warning ml-2">Editar</button>
                        <a href="{{ action('PlanesController@delete',['id'=>$plane->id]) }}"><button type="button" class="btn btn-danger ml-2">Borrar</button></a>
                    </div>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-6">
        <a class="btn btn-success mt-3 mb-5" type="submit" href="{{ action('PlanesController@create') }}">Agregar</a>
    </div>
    <div class="col-6">
        <div class="clearfix mt-3 mb-5"> {{ $planes->links() }} </div>
    </div>
</div>
@stop
