<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Blog</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    .form-container {
      background-color: #fff;
      max-width: 500px;
      margin: 80px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 25px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    button {
      background-color: #007BFF;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Editar Blog</h1>
    <form action="{{route('post.update', $blog->id)}}" method="POST">
      @csrf
      @method('PUT')
      <label for="title">Título:</label>
      <input type="text" id="title" name="title" required value="{{$blog->title}}">

      <label for="content">Contenido:</label>
      <textarea id="content" name="content" rows="6" required>{{$blog->content}}</textarea>

      <button type="submit">Guardar</button>
    </form>
  </div>
</body>
</html>