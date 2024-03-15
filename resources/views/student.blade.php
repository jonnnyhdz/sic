
<nav>
    <img src="https://lh5.googleusercontent.com/proxy/gh8uxjVzG49LDjhLZgrcMzWVgzWsjuQsdKcVnoXBwk-IOBfNSVMQZ2EhaRIbD01Cd1KBKHBiZdhZK04ziZVFTWYh0udmb8T_7x1NeFrb6oq-5gSa4mVt" alt="Logo UT Cancún" class="logo">
    <a href="/dashh">Dashboard</a>    
    <a href="/estudiantes">Alumnos</a>       
    <a href="#">Calificaciones</a>       
    <a href="#">Perfil</a>
</nav>

<a href="estudiantes"><button type="submit">Regresar</button></a>

<div class="container">
    <form action="{{url('estudiantes')}}" method="post" class="mt-10">
        <div class="sub">
            <h3>Nuevo Estudiante:</h3><br/>
        </div>
        @csrf
        <div class="input-group">
            <input type="text" name="name_student" placeholder="Nombre" class="input-field"/>
            <i class="fas fa-user icon"></i>
        </div>
        @error('name_student')
            <div class="error-message">{{$message}}</div>
        @enderror
        <div class="input-group">
            <input type="text" name="lastname_student" placeholder="Apellido" class="input-field"/>
            <i class="fas fa-user icon"></i>
        </div>
        @error('lastname_student')
            <div class="error-message">{{$message}}</div>
        @enderror
        <div class="input-group">
            <input type="number" name="id_student" placeholder="Matricula" class="input-field"/>
            <i class="fas fa-id-card icon"></i>
        </div>
        @error('id_student')
            <div class="error-message">{{$message}}</div>
        @enderror
        <div class="input-group">
            <input type="date" name="birthday" placeholder="Cumpleaños" class="input-field"/>
            <i class="fas fa-calendar-alt icon"></i>
        </div>
        @error('birthday')
            <div class="error-message">{{$message}}</div>
        @enderror
        <div class="input-group">
            <input type="text" name="comments" placeholder="Comentarios" class="input-field"/>
            <i class="fas fa-comment-alt icon"></i>
        </div>
        @error('comments')
            <div class="error-message">{{$message}}</div>
        @enderror
        <button type="submit">Enviar <i class="fas fa-paper-plane"></i></button>
    </form>
</div>



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
                background-position: center;
                margin: 0;
                padding: 0;
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            header {
                background-color: #005eab;
                color: white;
                padding: 10px;
                text-align: center;
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

            .sub h3 {
                font-size: 20px;
                font-weight: bold;
                color: #005eab;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 62vh;
            }

            form {
                width: 300px;
                padding: 20px;
                background: rgba(255, 255, 255, 0.8);
                border-radius: 30px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .input-group {
                position: relative;
                margin-bottom: 20px;
            }

            .input-field {
                width: calc(100% - 30px);
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 16px;
                padding-left: 35px;
            }

            .icon {
                position: absolute;
                left: 10px;
                top: 50%;
                transform: translateY(-50%);
                color: #666;
            }

            .error-message {
                color: red;
                margin-top: 5px;
                font-size: 14px;
            }

            button[type="submit"] {
                background-color: #005eab;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 150px;
                font-size: 14px;
                font-weight: bold;
                position: relative;
            }

            button[type="submit"] i {
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
            }

            button:hover {
                background-color: #004580;
            }

            footer {
                background-color: #005eab;
                color: white;
                padding: 20px;
                text-align: center;
                margin-top: auto;
            }
            .logo {
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }
        </style>
    </head>