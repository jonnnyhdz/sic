<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ccf0fc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            color: #053939;
            text-align: center;
            margin-bottom: 20px;
        }

        .photo {
            margin-top: 50px;
            width: 150px;
            display: block;
            border-radius: 50%;
            border: 3px solid #064343;
            margin-bottom: 20px;
            float: right;
            margin-right: 100px;
        }

        .details {
            color: #064343;
            margin-bottom: 10px;
        }

        .details b {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">{{$title}}</h1>
        <img src="{{public_path('images/image.png')}}" class="photo" alt="Student Photo">
        <h3 class="details">Nombre del Estudiante: <p>{{$details->name_student}}</p></h3>
        <h3 class="details">Apellido del Estudiante: <p>{{$details->lastname_student}}</p></h3>
        <h3 class="details">Cumpleaños del Estudiante: <p>{{$details->birthday}}</p></h3>
        <h3 class="details">Comentarios del Estudiante: <p>{{$details->comments}}</p></h3>
    </div>
</body>
</html>
