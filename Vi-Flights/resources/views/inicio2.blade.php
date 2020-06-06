@extends('layouts.master')
@section('titulo','Inicio')

@section('content')
<div class="row mb-5">
    <div class="col-md-1"></div>
    <div class="col-md-5">
        <div class="card mt-5 mb-5 ml-5" style="width:250px">
            <div class="card-header">Ofertas de Vuelo</div>
            <img class="card-img-top" src="{{ url('img/ofertas-vuelo.jpg') }}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card mt-5 mb-5 ml-5" style="width:250px">
            <div class="card-header">Mis vuelos</div>
            <img class="card-img-top" src="{{ url('img/mis-vuelos.jpg') }}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
@stop
