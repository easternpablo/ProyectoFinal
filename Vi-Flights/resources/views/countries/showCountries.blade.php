@extends('layouts.master')
@section('titulo','Gestionar países')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirportController@index') }}">Destinos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Países</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <h2>Gestión Países</h2>
    <table class="table table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Bandera</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach($countries as $country)
          <tr>
            <td>{{ $country->name }}</td>
            <td><img src="{{ action("CountryController@getImage",['image'=>$country->image]) }}" alt="Bandera" height="50px" width="80px"/></td>
            <td>
                <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-primary">Editar</button></a>
                    <a href="{{ action("CountryController@delete",['id'=>$country->id]) }}"><button type="button" class="btn btn-danger ml-2">Borrar</button></a>
                </div>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    <div class="col-6">
        <a class="btn btn-success mt-3 mb-5" type="submit" href="{{ action('CountryController@create') }}">Agregar</a>
    </div>
    <div class="col-6">
        <div class="clearfix mt-3 mb-5"> {{ $countries->links() }} </div>
    </div>
</div>
@stop
