@extends('layouts.plantilla')

@section('title', 'Crear cursos')

@section('content')
    <h1>Pagina para creación de cursos</h1>

    <form action="{{ route('cursos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </label>
        @error('nombre')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5"  >{{ old('descripcion') }}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <label>
            Categoria
            <br>
            <input type="text" name="categoria" value="{{ old('categoria') }}">
        </label>
        @error('categoria')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Guardar</button>
    </form>

@endsection
