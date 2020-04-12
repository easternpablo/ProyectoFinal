@extends('layouts.master')
@section('titulo','Nuevo avión')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@index') }}">Flota</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PlanesController@showPlanes') }}">Aviones</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nuevo Avión</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-header">{{ __('Nuevo avión') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ action('PlanesController@save') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="engines" class="col-form-label text-md-right">{{ __('Motores') }}</label>
                            <input id="engines" type="number" class="form-control @error('engines') is-invalid @enderror" name="engines" value="{{ old('engines') }}" required autocomplete="engines" autofocus>
                            @error('engines')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="length" class="col-form-label text-md-right">{{ __('Longitud') }}</label>
                            <input id="length" type="text" class="form-control @error('length') is-invalid @enderror" name="length" value="{{ old('length') }}" required autocomplete="length" autofocus>
                            @error('length')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="wingspan" class="col-form-label text-md-right">{{ __('Envergadura') }}</label>
                            <input id="wingspan" type="text" class="form-control @error('wingspan') is-invalid @enderror" name="wingspan" value="{{ old('wingspan') }}" required autocomplete="wingspan" autofocus>
                            @error('wingspan')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="range" class="col-form-label text-md-right">{{ __('Alcance') }}</label>
                            <input id="range" type="text" class="form-control @error('range') is-invalid @enderror" name="range" value="{{ old('range') }}" required autocomplete="range" autofocus>
                            @error('range')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="seats" class="col-form-label text-md-right">{{ __('Asientos') }}</label>
                            <input id="seats" type="number" class="form-control @error('seats') is-invalid @enderror" name="seats" value="{{ old('seats') }}" required autocomplete="seats" autofocus>
                            @error('seats')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="routes" class="col-form-label text-md-right">{{ __('Rutas') }}</label>
                            <input id="routes" type="text" class="form-control @error('routes') is-invalid @enderror" name="routes" value="{{ old('routes') }}" required autocomplete="routes" autofocus>
                            @error('routes')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="units" class="col-form-label text-md-right">{{ __('Unidades') }}</label>
                            <input id="units" type="number" class="form-control @error('units') is-invalid @enderror" name="units" value="{{ old('units') }}" required autocomplete="units" autofocus>
                            @error('units')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="file-plane1" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                            <input id="file-plane1" type="file" class="form-control-file border @error('file-plane1') is-invalid @enderror" name="file-plane1" value="{{ old('file-plane1') }}" required autocomplete="file-plane1" autofocus>
                            @error('file-plane1')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="file-plane2" class="col-form-label text-md-right">{{ __('Imagen 2') }}</label>
                            <input id="file-plane2" type="file" class="form-control-file border @error('file-plane2') is-invalid @enderror" name="file-plane2" value="{{ old('file-plane2') }}" required autocomplete="file-plane2" autofocus>
                            @error('file-plane2')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
