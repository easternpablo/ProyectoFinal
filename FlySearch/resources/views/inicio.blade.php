@extends('layouts.master')
@section('titulo','Inicio')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-md-3">
            <div class="card mb-3" style="width:250px">
                <div class="card-header">Aerolíneas</div>
                <img class="card-img-top" src="{{url('img/aerolineas.jpg')}}" alt="Card image" height="180px"/>
                <div class="card-body">
                    <a href="{{ action("AirlineController@showAirlines") }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="width:250px">
                <div class="card-header">Flota</div>
                <img class="card-img-top" src="{{url('img/flota-aviones.jpg')}}" alt="Card image" height="180px"/>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="width:250px">
                <div class="card-header">Vuelos</div>
                <img class="card-img-top" src="{{url('img/comparador-vuelos.jpg')}}" alt="Card image" height="180px"/>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3" style="width:250px">
                <div class="card-header">Destinos</div>
                <img class="card-img-top" src="{{url('img/aeropuertos.jpg')}}" alt="Card image" height="180px"/>
                <div class="card-body">
                    <a href="{{ action('AirportController@form') }}" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-2 mb-5" style="width:250px">
                <div class="card-header">Tripulación</div>
                <img class="card-img-top" src="{{url('img/cabina.jpg')}}" alt="Card image" height="180px"/>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-2 mb-5" style="width:250px">
                <div class="card-header">Reservas</div>
                <img class="card-img-top" src="{{url('img/billetes.jpg')}}" alt="Card image" height="180px"/>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mt-2 mb-5" style="width:250px">
                <div class="card-header">Estadísticas</div>
                <img class="card-img-top" src="{{url('img/estadisticas.jpg')}}" alt="Card image" height="180px"/>
                <div class="card-body">
                    <a href="#" class="btn btn-primary">Gestionar</a>
                </div>
            </div>
        </div>
    </div>
@stop
