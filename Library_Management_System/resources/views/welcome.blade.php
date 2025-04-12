<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="{{ asset('css/welcomeStyle.css') }}">

    <!-- Favicon personalizado -->
    <link rel="icon" href="{{ asset('img/books.png') }}" type="image/png">
</head>

<body class="d-flex align-items-center" style="height: 100vh; background-color: #ffffff;">

    <div class="container text-center">
        <h1 class="display-4 mb-4" style="color: #0077b6;">Bienvenido al <strong>Sistema de Bibliotecas</strong> 📚</h1>
        <p class="lead mb-5" style="color: #000000;">
            Administra libros, lectores y préstamos de manera sencilla y eficiente.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4"
                style="background-color: #0077b6; border-color: #0077b6;">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="btn btn-outline-dark btn-lg px-4">Registrarse</a>
        </div>
    </div>

</body>

</html>