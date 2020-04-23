@extends('layouts.master')
@section('titulo','Nuevo aeropuerto')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirportController@index') }}">Destinos</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirportController@showAirports') }}">Aeropuertos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nuevo Aeropuerto</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-header">{{ __('Nuevo aeropuerto') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ action('AirportController@save') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col">
                            <label for="iata" class="col-form-label text-md-right">{{ __('IATA') }}</label>
                            <input id="iata" type="text" class="form-control @error('iata') is-invalid @enderror" name="iata" value="{{ old('iata') }}" required autocomplete="iata" autofocus>
                            @error('iata')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="oaci" class="col-form-label text-md-right">{{ __('OACI') }}</label>
                            <input id="oaci" type="text" class="form-control @error('oaci') is-invalid @enderror" name="oaci" value="{{ old('oaci') }}" required autocomplete="oaci" autofocus>
                            @error('oaci')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="coordinates" class="col-form-label text-md-right">{{ __('Coordenadas') }}</label>
                            <input id="coordinates" type="text" class="form-control @error('coordinates') is-invalid @enderror" name="coordinates" value="{{ old('coordinates') }}" required autocomplete="coordinates" autofocus>
                            @error('coordinates')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="city" class="col-form-label text-md-right">{{ __('Ciudad') }}</label>
                            <select id="city" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                <option value="#">-- Seleccione una ciudad --</option>
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                            @error('city')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="type" class="col-form-label text-md-right">{{ __('Tipo') }}</label>
                            <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}">
                            @error('type')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="owner" class="col-form-label text-md-right">{{ __('Propietario') }}</label>
                            <input id="owner" type="text" class="form-control @error('owner') is-invalid @enderror" name="owner" value="{{ old('owner') }}">
                            @error('owner')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="operator" class="col-form-label text-md-right">{{ __('Operador') }}</label>
                            <input id="operator" type="text" class="form-control @error('operator') is-invalid @enderror" name="operator" value="{{ old('operator') }}">
                            @error('operator')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="file-airport" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                            <input id="file-airport" type="file" class="form-control-file border @error('file-airport') is-invalid @enderror" name="file-airport" value="{{ old('file-airport') }}" required autocomplete="file-airport" autofocus>
                            @error('file-airport')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
