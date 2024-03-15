<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Estilos para la navbar */
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

        /* Estilos para la card */
        .card {
            width: 300px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
        }

        .card h3 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            color: #666;
            font-size: 16px;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
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

    <div class="card">
        <a href="/estudiantes" >
        <h3>SIC</h3>
        <p>¡Bienvenido! Estás conectado.</p>
    </a>
    </div>
</body>
</html>
