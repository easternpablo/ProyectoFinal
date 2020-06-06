@extends('layouts.master')
@section('titulo','Flota aerolíneas')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@index') }}">Flota</a></li>
          <li class="breadcrumb-item active" aria-current="page">Listado Aerolíneas</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    @foreach($airlines as $airline)
        <div class="col-md-2">
            <a href="{{ action('AirlinePlaneController@showPlanesAirline',['id'=>$airline->id]) }}">
                <div class="card mt-1" style="width:180px; height:90px;">
                    <img class="card-img-top" src="{{ action("AirlineController@getImage",['image'=>$airline->image]) }}" alt="Card image" style="width:100%; height:100%;"/>
                </div>
            </a>
        </div>
    @endforeach
</div>
@stop
