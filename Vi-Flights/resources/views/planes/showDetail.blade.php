@extends('layouts.master')
@section('titulo','Detalle avión')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@index') }}">Flota</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@showPlanes') }}">Aviones</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle {{ $plane->name }}</li>
        </ol>
    </nav>
</div>
<div class="row mt-2">
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-header">Avión: <strong>{{$plane->name}}</strong></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-8">
                        <img src="{{ action("PlanesController@getImage",['image'=>$plane->image]) }}" alt="Imagen Avion" style="width:720px; height:250px"/>
                    </div>
                    <div class="col-sm-4">
                        <p class="mt-4">
                            Motores: <strong>{{ $plane->engines }}</strong>
                            &nbsp;&nbsp;
                            Alcance: <strong>{{$plane->range}} Km</strong>
                        </p>
                        <p>
                            Longitud: <strong>{{ $plane->length}} m</strong>
                            &nbsp;&nbsp;
                            Envergadura: <strong>{{ $plane->wingspan }} m</strong>
                        </p>
                        <p>Asientos: <strong>{{ $plane->seats }}</strong></p>
                        <p>Unidades: <strong>{{ $plane->units}}</strong></p>
                        <p>
                            @if($airline == null)
                                <a href="{{ action('AirlinePlaneController@create',['id'=>$plane->id]) }}"><button type="button" class="btn btn-secondary">Asignar</button></a>
                            @else
                                <a style="display:none;" href="{{ action('AirlinePlaneController@create',['id'=>$plane->id]) }}"><button type="button" class="btn btn-secondary">Asignar</button></a>
                            @endif
                            @if($airline != null)
                                <img src="{{ action("AirlineController@getImage",['image'=>$airline->image]) }}" alt="Aerolinea" height="40px" width="100px"/>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
