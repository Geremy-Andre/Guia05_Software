@extends('layouts.plantilla')

@section('title','Alumno')

@section('content')
    <h1>Bienvenido a la páguina princial de Alumnos</h1>
    <h3>Lista de Alumnos:</h3>
    <table class="table table-bordered">
        <tr>
            <th>Codigo</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach($alumnos as $alumnos)
            <tr>
                <td>{{ $alumnos->cod_estudiante }}</td>
                <td>{{ $alumnos->nombres }}</td>
                <td>{{ $alumnos->apellidos }}</td>
                <td>
                   <a href="{{route('alumnos.edit',['codigo'=>($alumnos->cod_estudiante)])}}"> Modificar </a>
                    <a href="{{route('alumnos.destroy',['codigo'=>($alumnos->cod_estudiante)])}}"> Eliminar </a>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-primary" href="{{route('alumnos.create')}}">Agregar</a>
@endsection