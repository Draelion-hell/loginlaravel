<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro de Usuario</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(to right, #4facfe, #00f2fe);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background-color: white;
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      animation: fadeIn 1s ease-out;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .form-group {
      margin-bottom: 1.2rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      color: #555;
    }

    input {
      width: 100%;
      padding: 0.75rem;
      border: 1px solid #ccc;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    input:focus {
      border-color: #00c6ff;
      outline: none;
      box-shadow: 0 0 5px rgba(0, 198, 255, 0.5);
    }

    .btn {
      width: 100%;
      padding: 0.75rem;
      border: none;
      background-color: #00c6ff;
      color: white;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background-color: #007acc;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Registro de Usuario</h2>
    <form action="/store" method="post">
      @csrf
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" id="name" name="name" required />
      </div>
      <div class="form-group">
        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button class="btn" type="submit">Registrarse</button>
    </form>
  </div>
</body>
</html>

