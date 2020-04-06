@extends('layouts.master')
@section('titulo','Gestionar Flota')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-md-6">
        <div class="card mt-5 mb-5 ml-5" style="width:250px">
            <div class="card-header">Aviones</div>
            <img class="card-img-top" src="{{ url('img/gestion-aviones.jpg') }}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mt-5 mb-5 ml-5" style="width:250px">
            <div class="card-header">Flota</div>
            <img class="card-img-top" src="{{ url('img/flota-aerolinea.jpg') }}" alt="Card image" height="180px"/>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Gestionar</a>
            </div>
        </div>
    </div>
</div>
@stop
