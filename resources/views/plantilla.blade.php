<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
</head>
<body>
    <header>
        <h1>@yield('Bienvenidos a mi página')</h1>
        <p>ESR</p>
    </header>
    <section>
        @yield('contenidoQcambia')
    </section>
    <footer>
        <p>
            Todos los derechos reservados ...
        </p>
    </footer>
</body>
</html>