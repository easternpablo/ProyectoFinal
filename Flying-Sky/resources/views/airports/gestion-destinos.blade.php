@extends('layouts.master')
@section('titulo','Gestionar Destinos')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-md-4">
        <div class="card mt-5 mb-5" style="width:250px">
            <div class="card-header">Ciudades</div>
            <img class="card-img-top" src="{{url('img/ciudades.jpg')}}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="{{ action('CityController@showCities') }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mt-5 mb-5" style="width:250px">
            <div class="card-header">Países</div>
            <img class="card-img-top" src="{{url('img/banderas-paises.jpg')}}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="{{ action('CountryController@showCountries') }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mt-5 mb-5" style="width:250px">
            <div class="card-header">Aeropuertos</div>
            <img class="card-img-top" src="{{url('img/gestion_aeropuerto.jpg')}}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="{{ action('AirportController@showAirports') }}" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
</div>
@stop
