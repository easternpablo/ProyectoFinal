@extends('layouts.master')
@section('titulo','Detalle Aeropuerto')

@section('content')
    <div class="row mt-5">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">Aeropuerto: <strong>{{$airport->name}}</strong></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{ action("AirportController@getImage",['image'=>$airport->image]) }}" alt="Imagen Aeropuerto" style="width:520px; height:320px"/>
                        </div>
                        <div class="col-sm-6">
                            <p class="mt-5">IATA: {{ $airport->iata }} &nbsp;&nbsp; OACI: {{$airport->oaci}} </p>
                            <p class="mt-5">Ciudad: {{ $airport->City->name}} &nbsp;&nbsp; Coordenadas: {{$airport->coordinates}}</p>
                            <p class="mt-5">Tipo: {{ $airport->type}} &nbsp;&nbsp; Propietario: {{$airport->owner}}</p>
                            <p class="mt-5">Operador: {{$airport->operator}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
