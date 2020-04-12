@extends('layouts.master')
@section('titulo','Asignar aerolínea')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@index') }}">Flota</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@showPlanes') }}">Aviones</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@showDetail',['id'=>$plane->id]) }}">Detalle Avión</a></li>
          <li class="breadcrumb-item active" aria-current="page">Asignar Aerolínea</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="card">
        <div class="card-header">{{ __('Asignar aerolínea') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ action('AirlinePlaneController@save',['id'=>$plane->id]) }}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <label for="airline" class="col-form-label text-md-right">{{ __('Aerolínea') }}</label>
                    <select id="airline" class="form-control @error('airline') is-invalid @enderror" name="airline" value="{{ old('airline') }}" required autocomplete="airline" autofocus>
                        <option value="#">-- Seleccione una aerolínea --</option>
                        @foreach($airlines as $airline)
                            <option value="{{$airline->id}}">{{ $airline->name }}</option>
                        @endforeach
                    </select>
                    @error('airline')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
            </form>
        </div>
    </div>
</div>
@stop
