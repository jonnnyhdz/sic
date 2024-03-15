<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Estudiante</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f7f7f7;
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
            display: block;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #005eab;
            margin-bottom: 20px;
        }

        .details {
            margin-bottom: 15px;
        }

        .details p {
            margin: 10px 0;
            font-weight: bold;
            color: #333;
        }

        .details-value {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f7f7f7;
            border-radius: 5px;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
        }

        .back-button a {
            text-decoration: none;
            color: #fff;
            background-color: #005eab;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .back-button a:hover {
            background-color: #00477a;
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

    <div class="container">
        <h1>Detalles del Estudiante</h1>

        <div class="details">
            <p>Nombre del estudiante:</p>
            <div class="details-value">{{$student->name_student}}</div>
        </div>
        
        <div class="details">
            <p>Apellido del Estudiante:</p>
            <div class="details-value">{{$student->lastname_student}}</div>
        </div>
        <div class="details">
            <p>Cumpleaños del Estudiante:</p>
            <div class="details-value">{{$student->birthday}}</div>
        </div>        
        <div class="details">
            <p>Comentarios del Estudiante:</p>
            <div class="details-value">{{$student->comments}}</div>
        </div>
    </div>

    <div class="back-button">
        <a href="../../estudiantes">Regresar</a>
    </div>

</body>
</html>
