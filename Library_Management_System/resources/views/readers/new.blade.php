<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lector</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="card shadow-sm rounded p-4">
            <h1 class="text-primary mb-4">Agregar Lector</h1>

            <form method="POST" action="{{ route('readers.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ingrese el nombre">
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Ingrese el apellido">
                </div>

                <div class="mb-3">
                    <label for="dirección" class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="dirección" name="dirección" required placeholder="Ingrese la dirección">
                </div>

                <div class="mb-3">
                    <label for="teléfono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="teléfono" name="teléfono" required placeholder="Ingrese el teléfono">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required placeholder="Ingrese el correo electrónico">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('readers.index') }}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
