<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    
    <header>
        @yield('header')
    </header>

    {{-- <nav>
        @yield('navbar')
    </nav> --}}

    <main>
        {{--? AQUI VA LA PARTE DINAMICA --}}
        {{-- ? YIEL NOS INDICA CON AYUDA DEL INDENTIFICADOR QUE PARTES SERAN DINAMICAS --}}
        
        <div>
        @yield('contenido') 
        </div>

        <div>
            @yield('diseño')        
        </div>
        
    </main>

    <Footer>
        @section('pie')
            <p>Este es el pie de pagina por defecto.</p>
        @show
    </Footer>
    
</body>
</html>


