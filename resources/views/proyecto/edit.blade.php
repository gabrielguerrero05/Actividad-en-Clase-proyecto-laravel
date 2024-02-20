<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Update</title>
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
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Pagina Update</h1>
    <form action="{{ route('proyecto.update', $proyecto) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="Ingrese un ID único" value="{{ $proyecto->id ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Roman Gonzalez" value="{{ $proyecto->nombre ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" placeholder="Descripción" value="{{ $proyecto->descripcion ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="imagen">Imagen</label>
            <input type="text" id="imagen" name="imagen" placeholder=".pnj">
        </div>

        <button type="submit">Actualizar</button>
    </form>
</div>
</body>
</html>
