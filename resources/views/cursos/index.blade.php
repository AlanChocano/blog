@extends('layouts.plantilla')

@section('title', 'Index')

@section('content')
    <h1>Bienvenido a la página principal de cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear Curso</a>

    @foreach ( $cursos as $curso )
        <ul>
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{ $curso->nombre }}</a>
                <br>
            </li>
        </ul>
    @endforeach
{{ $cursos->links() }}
@endsection
