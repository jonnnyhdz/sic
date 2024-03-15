<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xgg7Dw4YL3xp6M43UdyV13ftFZAS3TlV6wO12vIYt6F3oZF+6zvbBSuAH4QjkboS" crossorigin="anonymous">
    <title>Lista de Estudiantes</title>
    <!-- Agrega FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        header {
            background-color: #005eab;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 200px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #005eab;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .btn-primary {
            background-color: #005eab;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: #004477;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        th,
        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        thead {
            background-color: #005eab;
            color: #fff;
        }

        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        .icon-link {
            text-decoration: none;
            color: #56a3e2;
        }

        .icon-link:hover {
            text-decoration: underline;
        }

        /* Tamaño más grande para los iconos */
        .icon-large {
            font-size: 1.5em;
        }

        /* Estilos para la paginación */
        .pagination {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .page-item {
            margin: 0 5px;
            list-style: none;
        }

        .page-link {
            padding: 8px 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #005eab;
            background-color: white;
            transition: all 0.3s ease;
        }

        .page-link:hover {
            background-color: #f0f0f0;
        }

        .page-item.active .page-link {
            background-color: #005eab;
            color: white;
            border-color: #005eab;
        }

        nav {
            background-color: #005eab;
            color: white;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #004477;
        }
        .logo {
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }
    </style>
</head>

<body>
        <nav>
            <img src="https://lh5.googleusercontent.com/proxy/gh8uxjVzG49LDjhLZgrcMzWVgzWsjuQsdKcVnoXBwk-IOBfNSVMQZ2EhaRIbD01Cd1KBKHBiZdhZK04ziZVFTWYh0udmb8T_7x1NeFrb6oq-5gSa4mVt" alt="Logo UT Cancún" class="logo">
            <a href="/dashh">Dashboard</a>    
            <a href="/estudiantes">Alumnos</a>       
            <a href="#">Calificaciones</a>       
            <a href="#">Perfil</a>
        </nav>

    <h1>LISTA DE ESTUDIANTES</h1>

    <div class="container">
        <a href="formulario" class="btn-primary">Agregar Nuevo Estudiante</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Ver detalles</th>
                    <th>Editar</th>
                    <th>Imprimir Cardex</th> <!-- Nueva columna -->
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{$student->id_student}}</td>
                    <td>{{$student->name_student}}</td>
                    <td>{{$student->lastname_student}}</td>
                    <!-- Utiliza íconos de FontAwesome con tamaño más grande -->
                    <td><a href="{{route('estudiantes.show', $student->id)}}" class="icon-link"><i class="fas fa-info-circle icon-large"></i></a></td> <!-- Icono cambiado -->
                    <td><a href="{{route('estudiantes.edit', $student->id)}}" class="icon-link"><i class="fas fa-pencil-alt icon-large"></i></a></td>
                    <td><a href="{{route('reportes.imprimir', $student->id)}}" class="icon-link"><i class="fas fa-file-pdf icon-large"></i></a></td> <!-- Nuevo enlace -->
                </tr>
                @endforeach
            </tbody>
        </table>

        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{ $students->links('pagination::bootstrap-5') }}
            </ul>
        </nav>
    </div>
</body>

</html>
