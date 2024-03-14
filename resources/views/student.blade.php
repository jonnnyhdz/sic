@extends('plantilla2')
{{-- AQUI ES PURO HTML --}}
@section('titulo')
    ESTUDIANTES
@endsection

@section('header')
<header>
    <div>
        <img src="https://lh5.googleusercontent.com/proxy/gh8uxjVzG49LDjhLZgrcMzWVgzWsjuQsdKcVnoXBwk-IOBfNSVMQZ2EhaRIbD01Cd1KBKHBiZdhZK04ziZVFTWYh0udmb8T_7x1NeFrb6oq-5gSa4mVt" alt="Logo UT Cancún">
    </div>
</header>
@endsection


@section('contenido')
<a href="estudiantes"><button type="submit">Regrasar</button></a>

<div class="container">

    <form action="{{url('estudiantes')}}" method="post" class="mt-10">
        <div class="sub">
            <h3>Nuevo  Estudiante:</h3><br/>
        </div>
        @csrf
        <input type="text" name="name_student" placeholder="Nombre"/>
        @error('name_student')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="lastname_student" placeholder="Apellido"/>
        @error('lastname_student')
            <div>{{$message}}</div>
        @enderror
        <input type="number" name="id_student" placeholder="Matricula"/>
        @error('id_student')
            <div>{{$message}}</div>
        @enderror
        <input type="date" name="birthday" placeholder="Cumpleaños"/>
        @error('birthday')
            <div>{{$message}}</div>
        @enderror
        <input type="text" name="comments" placeholder="Comentarios"/>
        @error('comments')
            <div>{{$message}}</div>
        @enderror
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection

@section('pie')
<p>Universidad Tecnológica de Cancún - Todos los derechos reservados &copy; {{ date('Y') }}</p>
@endsection

@section( 'diseño')
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
    background-image: url('https://images.pexels.com/photos/1323712/pexels-photo-1323712.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); /* Reemplaza 'ruta_de_la_imagen.jpg' con la ruta de tu imagen */
    /* background-size: cover;  //Ajusta el tamaño de la imagen para cubrir todo el cuerpo */
    background-position: center; /* Centra la imagen en el cuerpo */
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

        header {
            background-color: #00ab84;
            color: white;
            padding: 4px;
            text-align: center;
        }

        .sub {
        text-align: center; /* Centra horizontalmente el contenido del div */
        }

    .sub h3 {
    font-size: 20px; /* Establece el tamaño de la letra */
    font-weight: bold;
    color: #078467;
    }

        main {
            flex: 1;
            padding: 20px;
        }

        /* Estilo para el contenedor del formulario */
    .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 62vh;
    }

    /* Estilo para el formulario */
    form {
    width: 300px;
    padding: 20px;
    background: rgba(244, 247, 246, 0.5); 
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Estilo para los inputs */
    input[type="text"],
    input[type="email"],
    input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    }

    /* Estilo para el botón */
    button[type="submit"] {
    background-color:  #00ab84;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 300px;
    font-size: 14px; /* Establece el tamaño de la letra */
    font-weight: bold;
    }

    button:hover{
        background-color: #078467;
        color: #ccc
    }

    /* Estilo para los mensajes de error */
    div[style="color:red"] {
    margin-bottom: 10px;
    }   

        footer {
            background-color: #00ab84;
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
@endsection