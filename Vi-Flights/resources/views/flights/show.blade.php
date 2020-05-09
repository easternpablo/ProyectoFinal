@extends('layouts.master')
@section('titulo','Listado de vuelos')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Vuelos</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <h2>Gestión Vuelos</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Número Identificativo</th>
                <th>Número Vuelo</th>
                <th>Categoría</th>
                <th>Viaje</th>
                <th>Fecha Vuelo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($flights as $flight)
              <tr>
                <td> {{ $flight->number }}</td>
                <td> {{ $flight->flight_number }} </td>
                <td> {{ $flight->category }} </td>
                <td> {{ $flight->travel }} </td>
                <td> {{ $flight->flight_date }} </td>
                <td>
                    <div class="btn-group">
                        <a href="{{ action('FlightController@showDetail',['id'=>$flight->id]) }}"><button type="button" class="btn btn-info ml-2">Ver</button></a>
                        <button type="button" class="btn btn-warning ml-2">Editar</button>
                        <a href="{{ action('FlightController@delete',['id'=>$flight->id]) }}"><button type="button" class="btn btn-danger ml-2">Borrar</button></a>
                    </div>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-6">
        <div class="btn-group">
            <a class="btn btn-success mt-3 mb-5" type="submit" href="{{ action('FlightController@create') }}">Agregar</a>
            <a class="btn btn-success ml-2 mt-3 mb-5" type="submit" href="{{ action('FlightAirlineController@create') }}">Agregar Oferta</a>
        </div>
    </div>
    <div class="col-6">
        <div class="clearfix mt-3 mb-5"> {{ $flights->links() }} </div>
    </div>
</div>
@stop
