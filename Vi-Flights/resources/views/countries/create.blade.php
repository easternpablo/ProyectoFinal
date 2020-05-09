@extends('layouts.master')
@section('titulo','Nuevo país')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('AirportController@index') }}">Destinos</a></li>
          <li class="breadcrumb-item"><a href="{{ action('CountryController@showCountries') }}">Países</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nuevo País</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="card">
        <div class="card-header">{{ __('Nuevo país') }}</div>
        <div class="card-body">
            <form method="POST" action="{{action('CountryController@save')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group row">
                    <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    <label for="file-country" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                    <input id="file-country" type="file" class="form-control-file border @error('file-country') is-invalid @enderror" name="file-country" value="{{ old('file-country') }}" required autocomplete="file-country" autofocus>
                    @error('file-country')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                    <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
