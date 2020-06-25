<! DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf8">
        <title>Titulo - @yield('titulo')</title>
    </head>

    <body>
        @section('header') <!-- Con section si tengo un contenido predeterminado -->
            <h5>CABECERA DE LA WEB (MASTER)</h5>
        @show <!-- Asi se cierra el section -->
<hr>
        <div class="container">
            @yield('content') <!-- Con yield yo no tengo un contenido por defecto -->
        </div>
<hr>
        @section('footer')
            <h5>PIE DE PAGINA DE LA WEB (MASTER)</h5>
        @show <!-- Asi se cierra el section -->
    </body>

</html>
