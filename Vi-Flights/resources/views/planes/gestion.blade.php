@extends('layouts.master')
@section('titulo','Gestionar flota')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Flota</li>
        </ol>
    </nav>
</div>
<div class="row mb-5">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="card mt-5 mb-5 ml-5" style="width:250px">
            <div class="card-header">Aviones</div>
            <img class="card-img-top" src="{{ url('img/gestion-aviones.jpg') }}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="{{ action('PlanesController@showPlanes') }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card mt-5 mb-5 ml-5" style="width:250px">
            <div class="card-header">Flota</div>
            <img class="card-img-top" src="{{ url('img/flota-aerolinea.jpg') }}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="{{ action('AirlinePlaneController@showAirlines') }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
@stop
