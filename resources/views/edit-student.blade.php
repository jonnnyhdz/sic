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
        }

        header {
            background-color: #00ab84;
            color: white;
            padding: 10px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #00ab84;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #105747;
        }

        

        p.error-message {
            color: red;
            font-size: 14px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        .back-button {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
   
    <header>
        <img src="https://lh5.googleusercontent.com/proxy/gh8uxjVzG49LDjhLZgrcMzWVgzWsjuQsdKcVnoXBwk-IOBfNSVMQZ2EhaRIbD01Cd1KBKHBiZdhZK04ziZVFTWYh0udmb8T_7x1NeFrb6oq-5gSa4mVt" alt="Logo UT Cancún">
    </header>


    <br>
    <br>
    <div class="back-button">
        <a href="../../estudiantes">
            <button type="button">Regresar</button>
        </a>
    </div>
     

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

        <button type="submit">Editar</button>
    </form>
</body>
</html>
