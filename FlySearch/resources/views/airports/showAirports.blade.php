@extends('layouts.master')
@section('titulo','Gestionar Aeropuertos')

@section('content')
<div class="row mt-5 mb-5">
    <h2>Gestión Aeropuertos</h2>
    <table class="table table-hover">
        <thead>
          <tr>
            <th>IATA</th>
            <th>OACI</th>
            <th>Nombre</th>
            <th>Ubicación</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>
          @foreach($airports as $airport)
          <tr>
            <td>{{ $airport->iata }}</td>
            <td>{{ $airport->oaci }}</td>
            <td>{{ $airport->name }}</td>
            <td>{{ $airport->City->name }}</td>
            <td>
                <div class="btn-group">
                    <a href="{{ action("AirportController@showDetail",['id'=>$airport->id]) }}"><button type="button" class="btn btn-info">Ver</button></a>
                    <a href="#"><button type="button" class="btn btn-warning ml-2">Editar</button></a>
                    <a href="{{ action("AirportController@delete",['id'=>$airport->id]) }}"><button type="button" class="btn btn-danger ml-2">Borrar</button></a>
                </div>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    <a class="btn btn-success mt-3 mb-5" type="submit" href="{{ action('AirportController@create') }}">Agregar</a>
</div>
@stop
