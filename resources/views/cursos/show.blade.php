@extends('layouts.plantilla')

@section('title', 'SHOW '.$curso->nombre)

@section('content')
    <h1>Bienvenido al curso {{ $curso->nombre }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>
    <p><strong>Descripcion</strong></p>
    <p>{{ $curso->descripcion }}</p>
    <p><strong>Categoria</strong></p>
    <p>{{ $curso->categoria }}</p>
    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
    @endsection
