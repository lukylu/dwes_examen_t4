@extends('layout')

@section('content')
    <h1>Editar Prenda</h1>

    <form action="/prendas/{{ $prenda->id }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $prenda->nombre }}" required>
        @error('nombre')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required>{{ $prenda->descripcion }}</textarea>
        @error('descripcion')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" value="{{ $prenda->precio }}" required>
        @error('precio')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <button type="submit">Actualizar Prenda</button>
        <a href="/">Cancelar</a>
    </form>
@endsection
