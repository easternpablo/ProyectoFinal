@extends('layouts.master')
@section('titulo','Detalle aerolínea')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirlineController@showAirlines') }}">Aerolíneas</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle {{$airline->name}}</li>
        </ol>
    </nav>
</div>
<div class="row mt-2">
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-header">Aerolínea: <strong>{{$airline->name}}</strong></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ action("AirlineController@getImage",['image'=>$airline->image]) }}" alt="Imagen Aerolinea" style="width:520px; height:250px"/>
                    </div>
                    <div class="col-sm-6">
                        <p class="mt-4">
                            IATA: <strong>{{ $airline->iata }}</strong>
                            &nbsp;&nbsp;
                            OACI: <strong>{{$airline->oaci}}</strong>
                        </p>
                        <p>
                            @if($airline->company != null)
                                Compañía: <strong>{{ $airline->company}}</strong>
                            @endif
                        </p>
                        <p>Director: <strong>{{ $airline->director }}</strong></p>
                        <p>Sede Central: <strong>{{ $airline->headquarter}}</strong></p>
                        <p>Aeropuerto Principal: <strong>{{$airline->airport->name}}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
