<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Ropa</title>
</head>
<body>
    <nav>
        <a href="/">Inicio</a>
        <a href="/prendas/crear">Crear Prenda</a>
    </nav>

    @if ($message = Session::get('success'))
        <p style="background-color: #d4edda; padding: 10px; margin: 10px 0;">{{ $message }}</p>
    @endif

    @yield('content')
</body>
</html>
