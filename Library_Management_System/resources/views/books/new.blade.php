<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="card shadow-sm rounded p-4">
            <h1 class="text-primary mb-4">Agregar Libro</h1>

            <form method="POST" action="{{ route('books.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="título" class="form-label">Título</label>
                    <input type="text" class="form-control" id="título" name="título" required placeholder="Ingrese el título del libro">
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor" required placeholder="Ingrese el autor del libro">
                </div>

                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" required placeholder="Ingrese el ISBN">
                </div>

                <div class="mb-3">
                    <label for="año_publicación" class="form-label">Año de Publicación</label>
                    <input type="date" class="form-control" id="año_publicación" name="año_publicación" required>
                </div>

                <div class="mb-3">
                    <label for="editorial" class="form-label">Editorial</label>
                    <input type="text" class="form-control" id="editorial" name="editorial" required placeholder="Ingrese la editorial">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('books.index') }}" class="btn btn-warning">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
