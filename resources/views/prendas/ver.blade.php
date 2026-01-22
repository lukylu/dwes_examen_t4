@extends('layout')

@section('content')
    <h1>Detalles de Prenda</h1>

    <p>
        <strong>Nombre:</strong> {{ $prenda->nombre }}
    </p>

    <p>
        <strong>Descripción:</strong> {{ $prenda->descripcion }}
    </p>

    <p>
        <strong>Precio:</strong> {{ $prenda->precio }} €
    </p>

    <p>
        <strong>Creado:</strong> {{ $prenda->created_at }}
    </p>

    <p>
        <strong>Actualizado:</strong> {{ $prenda->updated_at }}
    </p>

    <a href="/prendas/{{ $prenda->id }}/editar">Editar</a>
    <a href="/prendas/{{ $prenda->id }}/eliminar">Eliminar</a>
    <a href="/">Volver</a>
@endsection
