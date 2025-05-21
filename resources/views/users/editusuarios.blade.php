<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Editar de Usuario</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #667eea, #764ba2);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 2.5rem;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      color: #333;
      margin-bottom: 1.5rem;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
      font-weight: bold;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
      transition: 0.3s border;
    }

    .form-group input:focus {
      border-color: #764ba2;
      outline: none;
    }

    .submit-btn {
      width: 100%;
      padding: 0.9rem;
      background-color: #667eea;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s background;
    }

    .submit-btn:hover {
      background-color: #5a67d8;
    }

    .form-footer {
      text-align: center;
      margin-top: 1rem;
      color: #666;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Registro de Usuario</h2>
    <form action="/actualizar/usuario/{{$usuario->id}}" method="POST">
      @csrf
    
      <div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input type="text" id="nombre" name="name" required value="{{$usuario->name}}">
      </div>

      <div class="form-group">
        <label for="correo">Correo electrónico</label>
        <input type="email" id="correo" name="email" required value="{{$usuario->email}}">
      </div>

      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="imagen">Foto de perfil</label>
        <input type="file" id="imagen" name="imagen" accept="image/*">
      </div>

        <td>
            <button>ENVIAR</button>
        </td>
    </form>
    
  </div>
</body>
</html>