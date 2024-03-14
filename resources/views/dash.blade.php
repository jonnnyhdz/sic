{{-- @extends('plantilla2')

@section( 'dash')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #0056b3; /* Azul oscuro */
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #0d6efd; /* Azul */
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        main {
            flex: 1;
            padding: 20px;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .card {
            background-color: white;
            border: 1px solid #ced4da;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 300px;
            min-height: 200px;
            transition: transform 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card:hover {
            transform: scale(1.05);
        }

        footer {
            background-color: #0056b3; /* Azul oscuro */
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: auto;
        }

        .icon {
            margin-bottom: 10px;
            font-size: 48px;
            color: #0056b3; /* Azul oscuro */
        }
    </style>
</head>
<body>
    <header>
        <h1>@yield('titulo')</h1>
        <h1>BIENVENIDO</h1>
    </header>
    
    <nav>
        <a href="{{'/estudiantes' }}"><span class="icon"><i class="fas fa-user-graduate"></i></span> Alumnos</a>       
        <a href="{{ route('profesores') }}"><span class="icon"><i class="fas fa-chalkboard-teacher"></i></span> Docentes</a>
        <a href="#"><span class="icon"><i class="fas fa-user"></i></span> Perfil</a>
    </nav>

    <main>
        <div class="card-container">
            <div class="card">
                <span class="icon"><i class="fas fa-clipboard-list"></i></span>
                <h2>Información de Calificaciones</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
            </div>

            <div class="card">
                <span class="icon"><i class="fas fa-users"></i></span>
                <h2>Información de Alumnos</h2>
                <p>Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.</p>
            </div>

            <div class="card">
                <span class="icon"><i class="fas fa-book"></i></span>
                <h2>Información de Otras Asignaturas</h2>
                <p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>Universidad Tecnológica de Cancún - Todos los derechos reservados @ copyrigth 2024 &copy; {{ date('Y') }}</p>
    </footer>
</body>
</html>
@endsection --}}
