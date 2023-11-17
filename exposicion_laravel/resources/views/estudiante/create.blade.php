@extends('estudiante/template')
@section('title','Nuevo estudiante')

@section('content')

<h1>Crear estudiante</h1>
<form action="{{ url('/estudiantes') }}" method="POST">
    @csrf
    <label for="cedula">Cedula</label>
    <input type="text" name="cedula" id="cedula" required>
    <br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" required>
    <br>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" id="direccion" required>
    <br>
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" required>
    <br>
    <button type="submit">Guardar</button>
</form>


@endsection
