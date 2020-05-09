@extends('layouts.master')
@section('titulo','Nuevo vuelo')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('FlightController@showFlights') }}">Vuelos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nuevo Vuelo</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-header">{{ __('Nuevo vuelo') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ action('FlightController@save') }}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col">
                            <label for="number" class="col-form-label text-md-right">{{ __('Número') }}</label>
                            <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>
                            @error('number')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="flight" class="col-form-label text-md-right">{{ __('Número Vuelo') }}</label>
                            <input id="flight" type="text" class="form-control @error('flight') is-invalid @enderror" name="flight" value="{{ old('flight') }}" required autocomplete="flight" autofocus>
                            @error('flight')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="origin" class="col-form-label text-md-right">{{ __('Aeropuerto Origen') }}</label>
                            <select id="origin" class="form-control @error('origin') is-invalid @enderror" name="origin" value="{{ old('origin') }}" required autocomplete="origin" autofocus>
                                <option value="#">-- Seleccione un aeropuerto --</option>
                                @foreach($airports as $airport)
                                    <option value="{{$airport->id}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                            @error('origin')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="destination" class="col-form-label text-md-right">{{ __('Aeropuerto Destino') }}</label>
                            <select id="destination" class="form-control @error('destination') is-invalid @enderror" name="destination" value="{{ old('destination') }}" required autocomplete="destination" autofocus>
                                <option value="#">-- Seleccione un aeropuerto --</option>
                                @foreach($airports as $airport)
                                    <option value="{{$airport->id}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                            @error('destination')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="boarding" class="col-form-label text-md-right">{{ __('Hora Embarque') }}</label>
                            <input id="boarding" type="time" class="form-control @error('boarding') is-invalid @enderror" name="boarding" value="{{ old('boarding') }}" autocomplete="boarding" autofocus>
                            @error('boarding')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="departure" class="col-form-label text-md-right">{{ __('Hora Despegue') }}</label>
                            <input id="departure" type="time" class="form-control @error('departure') is-invalid @enderror" name="departure" value="{{ old('departure') }}" autocomplete="departure" autofocus>
                            @error('departure')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="arrival" class="col-form-label text-md-right">{{ __('Hora Llegada') }}</label>
                            <input id="arrival" type="time" class="form-control @error('arrival') is-invalid @enderror" name="arrival" value="{{ old('arrival') }}" autocomplete="arrival" autofocus>
                            @error('arrival')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="gate" class="col-form-label text-md-right">{{ __('Puerta de Embarque') }}</label>
                            <input id="gate" type="text" class="form-control @error('gate') is-invalid @enderror" name="gate" value="{{ old('gate') }}" autocomplete="gate" autofocus>
                            @error('gate')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="status" class="col-form-label text-md-right">{{ __('Estado') }}</label>
                            <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" autocomplete="status" autofocus>
                            @error('status')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="category" class="col-form-label text-md-right">{{ __('Categoría') }}</label>
                            <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>
                            @error('category')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="travel" class="col-form-label text-md-right">{{ __('Viaje') }}</label>
                            <input id="travel" type="text" class="form-control @error('travel') is-invalid @enderror" name="travel" value="{{ old('travel') }}" required autocomplete="travel" autofocus>
                            @error('travel')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="flight-date" class="col-form-label text-md-right">{{ __('Fecha Vuelo') }}</label>
                            <input id="flight-date" type="date" class="form-control @error('flight-date') is-invalid @enderror" name="flight-date" value="{{ old('flight-date') }}" required autocomplete="flight-date" autofocus>
                            @error('flight-date')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="flight-time" class="col-form-label text-md-right">{{ __('Duración Vuelo') }}</label>
                            <input id="flight-time" type="time" class="form-control @error('flight-time') is-invalid @enderror" name="flight-time" value="{{ old('flight-time') }}" required autocomplete="flight-time" autofocus>
                            @error('flight-time')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="plane" class="col-form-label text-md-right">{{ __('Avión') }}</label>
                            <select id="plane" class="form-control @error('plane') is-invalid @enderror" name="plane" value="{{ old('plane') }}" required autocomplete="plane" autofocus>
                                <option value="#">-- Seleccione un avión --</option>
                                @foreach($planes as $plane)
                                    <option value="{{$plane->id}}">{{$plane->name}}</option>
                                @endforeach
                            </select>
                            @error('plane')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="commander" class="col-form-label text-md-right">{{ __('Piloto') }}</label>
                            <select id="commander" class="form-control @error('commander') is-invalid @enderror" name="commander" value="{{ old('commander') }}" required autocomplete="commander" autofocus>
                                <option value="#">-- Seleccione un piloto --</option>
                                @foreach($pilots as $pilot)
                                    @if($pilot->rank == 'Comandante')<option value="{{$pilot->id}}">{{ $pilot->pilot_number }} - {{$pilot->name}} {{ $pilot->lastname }} - {{ $pilot->rank }}</option>@endif
                                @endforeach
                            </select>
                            @error('commander')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="co-pilot" class="col-form-label text-md-right">{{ __('Copiloto') }}</label>
                            <select id="co-pilot" class="form-control @error('co-pilot') is-invalid @enderror" name="co-pilot" value="{{ old('co-pilot') }}" required autocomplete="co-pilot" autofocus>
                                <option value="#">-- Seleccione un piloto --</option>
                                @foreach($pilots as $pilot)
                                    <option value="{{$pilot->id}}">{{ $pilot->pilot_number }} - {{$pilot->name}} {{ $pilot->lastname }} - {{ $pilot->rank }}</option>
                                @endforeach
                            </select>
                            @error('co-pilot')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
