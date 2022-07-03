@extends('layouts.plantilla')
@section('title','Crear Alumno')
@section('content')
    <h1> En esta página podras modificar un Alumno</h1>
    <form action="{{route('alumnos.update',['codigo'=>($alumno->cod_estudiante)])}}" method="POST">
        @csrf
        <label for="">
            Cod. Estudiante:<br/>
            <input type="text" name="codigo" value="{{$alumno->cod_estudiante}}">
        </label>
        <br/>
        <label for="">
            Nombres:<br/>
            <input type="text" name="nombres" value="{{$alumno->nombres}}">
        </label>
        <br/>
        <label for="">
            Apellidos:<br/>
            <input type="text" name="apellidos" value="{{$alumno->apellidos}}">
        </label>
        <br/>
        <label for="">
            DNI:<br/>
            <input type="text" name="dni" value="{{$alumno->dni}}">
        </label>
        <br/>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection