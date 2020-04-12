@extends('layouts.master')
@section('titulo','Listado aviones aerolínea')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@index') }}">Flota</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirlinePlaneController@showAirlines') }}">Listado Aerolíneas</a></li>
          <li class="breadcrumb-item active" aria-current="page">Listado Aviones</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    @foreach($planes as $plane)
        <div class="col-md-2 ml-5">
            <div class="card ml-5" style="width:230px;">
                <div class="card-header">{{ $plane->name }}</div>
                <img class="card-img-top" src="{{ action("PlanesController@getImage",['image'=>$plane->image]) }}" alt="Card image" height="90px"/>
            </div>
        </div>
    @endforeach
</div>
@stop
