@extends('layouts.master')
@section('titulo','Gestionar Aerolíneas')

@section('content')
<div class="row mt-5 mb-5">
    <h2>Gestión Aerolíneas</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Logo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($airlines as $airline)
              <tr>
                <td>{{ $airline->name }}</td>
                <td><img src="{{ action("AirlineController@getImage",['image'=>$airline->image]) }}" alt="Aerolinea" height="40px" width="100px"/></td>
                <td>
                    <div class="btn-group">
                        <a href="{{ action('AirlineController@showDetail',['id'=>$airline->id]) }}"><button type="button" class="btn btn-info">Ver</button></a>
                        <button type="button" class="btn btn-warning ml-2">Editar</button>
                        <a href="{{ action('AirlineController@delete',['id'=>$airline->id]) }}"><button type="button" class="btn btn-danger ml-2">Borrar</button></a>
                    </div>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-6">
        <a class="btn btn-success mt-3 mb-5" type="submit" href="{{ action('AirlineController@create') }}">Agregar</a>
    </div>
    <div class="col-6">
        <div class="clearfix mt-3 mb-5"> {{ $airlines->links() }} </div>
    </div>
</div>
@stop
