<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav>
        <a href="/">inicio</a>
        <a href="">contacto</a>
        <a href="">sobre nosotros</a>
        <a href="/inicio">Registrate</a>
    </nav>

    @yield('body')

</body>
</html>
