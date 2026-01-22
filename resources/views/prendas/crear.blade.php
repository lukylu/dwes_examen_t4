@extends('layout')

@section('content')
    <h1>Crear Prenda</h1>

    <form action="/prendas" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        @error('nombre')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
        @error('descripcion')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required>
        @error('precio')
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br><br>

        <button type="submit">Crear Prenda</button>
        <a href="/">Cancelar</a>
    </form>
@endsection
