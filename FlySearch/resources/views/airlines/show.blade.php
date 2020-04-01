@extends('layouts.master')
@section('titulo','Gestionar Aerolíneas')

@section('content')
<div class="row mt-5 mb-5">
    <h2>Gestión Aerolíneas</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Logo</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($airlines as $airline)
              <tr>
                <td>{{ $airline->name }}</td>
                <td>{{ $airline->image }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Ver</button>
                        <button type="button" class="btn btn-warning">Editar</button>
                        <button type="button" class="btn btn-danger">Borrar</button>
                    </div>
                </td>
              </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success mt-3 mb-3" type="submit">Agregar</a>
</div>
@stop
