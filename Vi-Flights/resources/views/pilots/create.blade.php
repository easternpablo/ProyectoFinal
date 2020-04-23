@extends('layouts.master')
@section('titulo','Nuevo piloto')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ action('PilotController@showPilots') }}">Pilotos</a></li>
          <li class="breadcrumb-item active" aria-current="page">Nuevo Piloto</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-header">{{ __('Nuevo piloto') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ action('PilotController@save') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col">
                            <label for="pilot_number" class="col-form-label text-md-right">{{ __('Número Piloto') }}</label>
                            <input id="pilot_number" type="text" class="form-control @error('pilot_number') is-invalid @enderror" name="pilot_number" value="{{ old('pilot_number') }}" required autocomplete="pilot_number" autofocus>
                            @error('pilot_number')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="license_date" class="col-form-label text-md-right">{{ __('Fecha de Licencia') }}</label>
                            <input id="license_date" type="date" class="form-control @error('license_date') is-invalid @enderror" name="license_date" value="{{ old('license_date') }}" required autocomplete="license_date" autofocus>
                            @error('license_date')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="nif" class="col-form-label text-md-right">{{ __('Nif') }}</label>
                            <input id="nif" type="text" class="form-control @error('nif') is-invalid @enderror" name="nif" value="{{ old('nif') }}" required autocomplete="nif" autofocus>
                            @error('nif')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="lastname" class="col-form-label text-md-right">{{ __('Apellidos') }}</label>
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                            @error('lastname')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="col-form-label text-md-right">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="phone" class="col-form-label text-md-right">{{ __('Teléfono') }}</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            @error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="birth_date" class="col-form-label text-md-right">{{ __('Fecha Nacimiento') }}</label>
                            <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>
                            @error('birth_date')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                        <div class="col">
                            <label for="nationality" class="col-form-label text-md-right">{{ __('Nacionalidad') }}</label>
                            <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required autocomplete="nationality" autofocus>
                            @error('nationality')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="rank" class="col-form-label text-md-right">{{ __('Rango') }}</label>
                            <select id="rank" class="form-control @error('rank') is-invalid @enderror" name="rank" value="{{ old('rank') }}" required autocomplete="rank" autofocus>
                                <option value="#">-- Seleccione rango --</option>
                                <option value="Primer Oficial">Primer Oficial</option>
                                <option value="Segundo Oficial">Segundo Oficial</option>
                                <option value="Comandante">Comandante</option>
                                <option value="Jefe de Flota">Jefe de Flota</option>
                            </select>
                            @error('rank')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="file-pilot" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                            <input id="file-pilot" type="file" class="form-control-file border @error('file-pilot') is-invalid @enderror" name="file-pilot" value="{{ old('file-pilot') }}" required autocomplete="file-pilot" autofocus>
                            @error('file-plane1')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
