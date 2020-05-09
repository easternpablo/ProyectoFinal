@extends('layouts.master')
@section('titulo','Detalle vuelo')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('FlightController@showFlights') }}">Vuelos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle Vuelo {{ $flight->flight_number }}</li>
        </ol>
    </nav>
</div>
<div class="row mt-2">
    <div class="col-12 mb-3">
        <div class="card mb-5">
            <div class="card-header">
                Vuelo: <strong>{{ $flight->flight_number }}</strong>
                &nbsp;&nbsp;
                Categoría: <strong>{{ $flight->category }}</strong>
                &nbsp;&nbsp;
                Estado Vuelo: <strong>{{ $flight->status }}</strong>
                &nbsp;&nbsp;
                Viaje: <strong>{{ $flight->travel }}</strong>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="{{ action('AirportController@getImage',['image'=>$origin->image]) }}" alt="Imagen Origen" style="width:265px; height:200px"/>
                        </div>
                        <div class="col-sm-3">
                            <p class="mt-4">Origen: <strong>({{ $origin->iata }}){{ $origin->name }}</strong></p>
                            <p>Hora Embarque: <strong>{{ $flight->boarding_time }}</strong></p>
                            <p>Hora Salida: <strong>{{ $flight->departure_time }}</strong></p>
                            <p>Puerta Embarque: <strong>{{ $flight->boarding_gate }}</strong></p>
                        </div>
                        <div class="col-sm-3">
                            <img src="{{ action('AirportController@getImage',['image'=>$destination->image]) }}" alt="Imagen Origen" style="width:265px; height:200px"/>
                        </div>
                        <div class="col-sm-3">
                            <p class="mt-4">Destino: <strong>({{ $destination->iata }}){{ $destination->name }}</strong></p>
                            <p>Hora Llegada: <strong>{{ $flight->arrival_time }}</strong></p>
                            <p>Puerta Llegada: <strong>{{ $flight->arrival_gate }}</strong></p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card" style="height: 100%; width: 100%;">
                                        <img class="card-img-top" src="{{ action('PilotController@getImage',['image'=>$commander->image]) }}" alt="Imagen Piloto">
                                        <div class="card-body">
                                          <h5 class="card-title">{{ $commander->name }} {{ $commander->lastname }}</h5>
                                          <p>Número: <strong>{{ $commander->pilot_number }}</strong></p>
                                          <p>Rango: <strong>{{ $commander->rank }}</strong></p>
                                          <p>Nacionalidad: <strong>{{ $commander->nationality }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card" style="height: 100%; width: 100%;">
                                        <img class="card-img-top" src="{{ action('PilotController@getImage',['image'=>$co_pilot->image]) }}" alt="Imagen Piloto">
                                        <div class="card-body">
                                          <h5 class="card-title">{{ $co_pilot->name }} {{ $co_pilot->lastname }}</h5>
                                          <p>Número: <strong>{{ $co_pilot->pilot_number }}</strong></p>
                                          <p>Rango: <strong>{{ $co_pilot->rank }}</strong></p>
                                          <p>Nacionalidad: <strong>{{ $co_pilot->nationality }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card" style="height: 100%; width: 100%;">
                                        <img class="card-img-top" src="{{ action('PlanesController@getImage',['image'=>$plane->image]) }}" alt="Imagen Avion">
                                        <div class="card-body">
                                          <h5 class="card-title">{{ $plane->name }}</h5>
                                          <p>Motores: <strong>{{ $plane->engines }}</strong></p>
                                          <p>Nº Asientos: <strong>{{ $plane->seats }}</strong></p>
                                          <p>Asientos Ocupados: <strong>{{ $flight->occupied_seats }}</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    Fecha Vuelo: <strong>{{ $flight->flight_date }}</strong>
                    &nbsp;&nbsp;
                    Tiempo Vuelo: <strong>{{ $flight->flight_time }}</strong>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop
