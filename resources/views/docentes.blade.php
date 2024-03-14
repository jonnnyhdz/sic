@extends ('plantilla')
@section('titulo')
    docentes
@endsection

@section('contenido')
<h1>Bienvenidos docentes</h1>

{{-- <a href="{{route('alumnos')}}">alumnos</a> --}}
<a href="{{'/estudiantes'}}">alumnos</a>
@endsection