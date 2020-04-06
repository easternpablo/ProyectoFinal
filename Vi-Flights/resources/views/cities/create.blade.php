@extends('layouts.master')
@section('titulo','Nueva Ciudad')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="card mb-5">
            <div class="card-header">{{ __('Nueva ciudad') }}</div>
            <div class="card-body">
                <form method="POST" action="{{ action('CityController@save') }}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="country" class="col-form-label text-md-right">{{ __('País') }}</label>
                        <select id="country" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country" autofocus>
                            <option value="#">-- Seleccione un país --</option>
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="file-city" class="col-form-label text-md-right">{{ __('Imagen') }}</label>
                        <input id="file-city" type="file" class="form-control-file border @error('file-city') is-invalid @enderror" name="file-city" value="{{ old('file-city') }}" required autocomplete="file-city" autofocus>
                        @error('file-city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button type="submit" name="submit" class="btn btn-success mt-4">{{ __('Añadir') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
