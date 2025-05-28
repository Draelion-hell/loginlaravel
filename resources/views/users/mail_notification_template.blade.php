<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Confirmación de cuenta - {{ config('app.name') }}</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 40px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .header h1 {
      color: #333333;
      font-size: 24px;
      text-align: center;
    }
    .message p {
      font-size: 16px;
      color: #555555;
      line-height: 1.5;
    }
    .btn {
      display: inline-block;
      background-color: #007BFF;
      color: #ffffff;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
    }
    .footer {
      font-size: 13px;
      color: #999999;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Hola, {{ $user->name }}. Bienvenido a {{ config('app.name') }}!</h1>
    </div>
    <div class="message">
      <p>Gracias por registrarte. Solo falta un paso para activar tu cuenta.</p>
      <p>Haz clic en el siguiente botón para confirmar tu correo electrónico:</p>
      <p style="text-align: center;">
        <a href="{{ url('/users/active/account/'.$token) }}" class="btn">Confirmar cuenta</a>
      </p>
    </div>
    <div class="footer">
      Si no solicitaste este correo, puedes ignorarlo.<br>
      &copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.
    </div>
  </div>
</body>
</html>