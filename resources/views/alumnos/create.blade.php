@extends('layouts.plantilla')
@section('title','Crear Alumno')
@section('content')
    <h1> En esta página podras crear un Alumno</h1>
    <form action="{{route('alumnos.store')}}" method="POST">
        @csrf
        <label for="">
            Cod. Estudiante:<br/>
            <input type="text" name="codigo">
        </label>
        <br/>
        <label for="">
            Nombres:<br/>
            <input type="text" name="name">
        </label>
        <br/>
        <label for="">
            Apellidos:<br/>
            <input type="text" name="apellidos">
        </label>
        <br/>
        <label for="">
            DNI:<br/>
            <input type="text" name="dni">
        </label>
        <br/>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection