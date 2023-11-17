@extends('estudiante/template')
@section('title','Editar estudiante')

@section('content')

<h1>Editar al estudiante</h1>
<form action="{{ url('/estudiantes'.$estudiante['cedula']) }}" method="POST">
    @method('PUT')
    @csrf
    <label for="cedula">Cedula</label>
    <input type="text" name="cedula" id="cedula" value='{{$estudiante['cedula']}}' readonly>
    <br>
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value='{{$estudiante['nombre']}}' required>
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" value='{{$estudiante['apellido']}}' required>
    <br>    <input type="text" name="direccion" id="direccion" value='{{$estudiante['direccion']}}' required>
    <br>
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono" value='{{$estudiante['telefono']}}' required>
    <br>
    <button type="submit">Guardar</button>
</form>

@endsection
