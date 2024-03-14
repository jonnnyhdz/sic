<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }

        header {
            background-color: #00ab84;
            color: white;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        button {
            background: #00ab84;
            color: #f5f5f5;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 300px;
            font-size: 14px;
            font-weight: bold;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        thead {
            background-color: #00ab84;
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
            color: #00ab84;
        }

        .icon-link:hover {
            text-decoration: underline;
        }

        /* Tamaño más grande para los iconos */
        .icon-large {
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <header>
        <img src="https://lh5.googleusercontent.com/proxy/gh8uxjVzG49LDjhLZgrcMzWVgzWsjuQsdKcVnoXBwk-IOBfNSVMQZ2EhaRIbD01Cd1KBKHBiZdhZK04ziZVFTWYh0udmb8T_7x1NeFrb6oq-5gSa4mVt" alt="Logo UT Cancún">
    </header>

    <h1>LISTA DE ESTUDIANTES</h1>

    <div>
        <a href="formulario"><button type="submit">Agregar Nuevo Estudiante</button></a>
    </div>

    <br>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Ver detalles</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id_student}}</td>
                <td>{{$student->name_student}}</td>
                <td>{{$student->lastname_student}}</td>
                <!-- Utiliza íconos de FontAwesome con tamaño más grande -->
                <td><a href="{{route('estudiantes.show', $student->id)}}" class="icon-link"><i class="fas fa-eye icon-large"></i></a></td>
                <td><a href="{{route('estudiantes.edit', $student->id)}}" class="icon-link"><i class="fas fa-edit icon-large"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{$students->links()}}
    </div>
</body>

</html>
