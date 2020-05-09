@extends('layouts.master')
@section('titulo','Asignar Oferta')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('FlightController@showFlights') }}">Vuelos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Asignar Oferta</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="card">
        <div class="card-header">{{ __('Asignar oferta') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ action('FlightAirlineController@save') }}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="col">
                        <label for="flight" class="col-form-label text-md-right">{{ __('Vuelo') }}</label>
                        <select id="flight" class="form-control @error('flight') is-invalid @enderror" name="flight" value="{{ old('flight') }}" required autocomplete="flight" autofocus>
                            <option value="#">-- Seleccione un vuelo --</option>
                            @foreach($flights as $flight)
                                <option value="{{$flight->id}}">{{ $flight->number }} - {{ $flight->flight_number }}</option>
                            @endforeach
                        </select>
                        @error('flight')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="airline" class="col-form-label text-md-right">{{ __('Aerolínea') }}</label>
                        <select id="airline" class="form-control @error('airline') is-invalid @enderror" name="airline" value="{{ old('airline') }}" required autocomplete="airline" autofocus>
                            <option value="#">-- Seleccione una aerolínea --</option>
                            @foreach($airlines as $airline)
                                <option value="{{$airline->id}}">{{ $airline->name }}</option>
                            @endforeach
                        </select>
                        @error('airline')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
            </form>
        </div>
    </div>
</div>
@stop
