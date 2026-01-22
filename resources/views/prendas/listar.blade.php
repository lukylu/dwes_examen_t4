@extends('layout')

@section('content')
    <h1>Prendas de Ropa</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prendas as $prenda)
                <tr>
                    <td>{{ $prenda->id }}</td>
                    <td>{{ $prenda->nombre }}</td>
                    <td>{{ $prenda->descripcion }}</td>
                    <td>{{ $prenda->precio }} €</td>
                    <td>
                        <a href="/prendas/{{ $prenda->id }}">Ver</a>
                        <a href="/prendas/{{ $prenda->id }}/editar">Editar</a>
                        <a href="/prendas/{{ $prenda->id }}/eliminar">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
