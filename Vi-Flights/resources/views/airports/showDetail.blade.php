@extends('layouts.master')
@section('titulo','Detalle aeropuerto')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirportController@index') }}">Destinos</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirportController@showAirports') }}">Aeropuertos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle Aerpuerto {{$airport->name}}</li>
        </ol>
    </nav>
</div>
<div class="row mb-5">
    <div class="col-12 mb-5">
        <div class="card mb-5">
            <div class="card-header">Aeropuerto: <strong>{{$airport->name}}</strong></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ action("AirportController@getImage",['image'=>$airport->image]) }}" alt="Imagen Aeropuerto" style="width:520px; height:320px"/>
                    </div>
                    <div class="col-sm-6">
                        <p class="mt-5">
                            IATA: <strong>{{ $airport->iata }}</strong>
                            &nbsp;&nbsp;
                            OACI: <strong>{{ $airport->oaci }}</strong>
                        </p>
                        <p>Ciudad: <strong>{{ $airport->City->name }}</strong></p>
                        <p>Coordenadas: <strong>{{ $airport->coordinates }}</strong></p>
                        <p>
                            @if($airport->type != null)
                                Tipo: <strong>{{ $airport->type }}</strong>
                            @endif
                        </p>
                        <p>
                            @if($airport->owner != null)
                                Propietario: <strong>{{ $airport->owner }}</strong>
                            @endif
                        </p>
                        <p>
                            @if($airport->operator != null)
                                Operador: <strong>{{ $airport->operator }}</strong>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
