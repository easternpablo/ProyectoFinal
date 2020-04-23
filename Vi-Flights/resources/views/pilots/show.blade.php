@extends('layouts.master')
@section('titulo','Gestionar pilotos')

@section('content')
<div class="row mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ action('InicioController@index') }}">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">Pilotos</li>
        </ol>
    </nav>
</div>
<div class="row mt-2 mb-5">
    <h2>Gestión Pilotos</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Número Piloto</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Rango</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pilots as $pilot)
              <tr>
                <td>{{ $pilot->pilot_number }}</td>
                <td>{{ $pilot->name }}</td>
                <td>{{ $pilot->lastname }}</td>
                <td>{{ $pilot->rank }}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ action('PilotController@showDetail',['id'=>$pilot->id]) }}"><button type="button" class="btn btn-info">Ver</button></a>
                        <button type="button" class="btn btn-warning ml-2">Editar</button>
                        <a href="{{ action('PilotController@delete',['id'=>$pilot->id]) }}"><button type="button" class="btn btn-danger ml-2">Borrar</button></a>
                    </div>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-6">
        <a href="{{ action('PilotController@create') }}"><button type="button" class="btn btn-success">Agregar</button></a>
    </div>
    <div class="col-6">
        <div class="clearfix mt-3 mb-5"> {{ $pilots->links() }} </div>
    </div>
</div>
@stop
