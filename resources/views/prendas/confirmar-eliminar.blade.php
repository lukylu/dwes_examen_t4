@extends('layout')

@section('content')
    <h1>Confirmar Eliminación</h1>

    <p>¿Está seguro de que desea eliminar la prenda <strong>{{ $prenda->nombre }}</strong>?</p>

    <form action="/prendas/{{ $prenda->id }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>

    <a href="/">Cancelar</a>
@endsection
