@extends('layouts.master')
@section('titulo','Nueva aerolínea')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirlineController@showAirlines') }}">Aerolíneas</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nueva Aerolínea</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-header">{{ __('Nueva aerolínea') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ action('AirlineController@save') }}" enctype="multipart/form-data">
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
                            <label for="company" class="col-form-label text-md-right">{{ __('Compañía') }}</label>
                            <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}">
                            @error('company')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="director" class="col-form-label text-md-right">{{ __('Director') }}</label>
                            <input id="director" type="text" class="form-control @error('director') is-invalid @enderror" name="director" value="{{ old('director') }}" required autocomplete="director" autofocus>
                            @error('director')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="headquarter" class="col-form-label text-md-right">{{ __('Sede Central') }}</label>
                            <input id="headquarter" type="text" class="form-control @error('headquarter') is-invalid @enderror" name="headquarter" value="{{ old('headquarter') }}" required autocomplete="headquarter" autofocus>
                            @error('headquarter')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="airport" class="col-form-label text-md-right">{{ __('Aeropuerto principal') }}</label>
                            <select id="airport" class="form-control @error('airport') is-invalid @enderror" name="airport" value="{{ old('airport') }}" required autocomplete="airport" autofocus>
                                <option value="#">-- Seleccione un aeropuerto --</option>
                                @foreach($airports as $airport)
                                    <option value="{{$airport->id}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                            @error('airport')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="file-airline" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                            <input id="file-airline" type="file" class="form-control-file border @error('file-airline') is-invalid @enderror" name="file-airline" value="{{ old('file-airline') }}" required autocomplete="file-airline" autofocus>
                            @error('file-airline')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
