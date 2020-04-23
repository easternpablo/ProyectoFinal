@extends('layouts.master')
@section('titulo','Detalle piloto')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PilotController@showPilots') }}">Pilotos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detalle Piloto</li>
        </ol>
    </nav>
</div>
<div class="row mt-2">
    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-header">Piloto: <strong>{{$pilot->pilot_number}}</strong></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ action("PilotController@getImage",['image'=>$pilot->image]) }}" alt="Imagen Piloto" style="width:520px; height:250px"/>
                    </div>
                    <div class="col-sm-6">
                        <p class="mt-2">
                            Apellidos: <strong>{{ $pilot->lastname }}</strong>
                            &nbsp;&nbsp;
                            Nombre: <strong>{{ $pilot->name }}</strong>
                        </p>
                        <p>
                            Fecha Nacimiento: <strong>{{ $pilot->birth_date }}</strong>
                            &nbsp;&nbsp;
                            Nif: <strong>{{ $pilot->nif }}</strong>
                        </p>
                        <p>Email: <strong>{{ $pilot->email }}</strong></p>
                        <p>Teléfono: <strong>{{ $pilot->phone }}</strong></p>
                        <p>
                            Rango: <strong>{{ $pilot->rank }}</strong>
                            &nbsp;&nbsp;
                            Fecha Licencia: <strong>{{ $pilot->license_date }}</strong>
                        </p>
                        <p>Nacionalidad: <strong>{{ $pilot->nationality }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
