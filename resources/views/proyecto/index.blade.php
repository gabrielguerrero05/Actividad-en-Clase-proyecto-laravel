<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            font-weight: bold;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Vista</h1>
    <form action="{{ route('proyecto.create') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="nombre">Nombres</label>
            <ul>
                @foreach ($proyectos as $proyecto)
                    <li>{{$proyecto->nombre}}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-3">
            <label for="descripcion">Descripción</label>
            <ul>
                @foreach ($proyectos as $proyecto)
                    <li>{{$proyecto->descripcion}}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-3">
            <label for="imagen">Imagen</label>
            <ul>
                @foreach ($proyectos as $proyecto)
                    <li>{{$proyecto->imagen}}</li>
                @endforeach
            </ul>
        </div>

    </form>
</div>
</body>
</html>
