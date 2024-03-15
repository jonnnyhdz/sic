<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Edición de Estudiantes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
        }
        .logo {
            max-width: 200px;
            margin: 0 auto;
            display: block;
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

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #005eab;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #004477;
        }

        p.error-message {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .back-button {
            text-align: center;
            margin-top: 20px;
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

    <form action="{{ route('estudiantes.update', $student->id) }}" method="POST">
        @csrf
        @method("put")

        <label for="name_student">Nombre:</label>
        <input type="text" name="name_student" value="{{ $student->name_student }}">
        @error('name_student')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <label for="lastname_student">Apellido:</label>
        <input type="text" name="lastname_student" value="{{ $student->lastname_student }}">
        @error('lastname_student')
            <p class="error-message">{{ $message }}</p>
        @enderror

        <button type="submit">Guardar</button>
    </form>

    <div class="back-button">
        <a href="../../estudiantes">
            <button type="button">Regresar</button>
        </a>
    </div>
</body>
</html>
