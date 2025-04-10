<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Préstamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #ffffff; color: #000000;">
    <div class="container mt-5">
        <div class="card shadow-sm rounded p-4">
            <h1 class="text-danger mb-4">Editar Préstamo</h1>

            <form method="POST" action="{{ route('prestamos.update', ['prestamo' => $prestamo->id]) }}">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" class="form-control" id="id" disabled value="{{ $prestamo->id }}">
                    <div class="form-text text-dark">ID del préstamo</div>
                </div>

                <div class="mb-3">
                    <label for="libro_id" class="form-label">Libro</label>
                    <select class="form-select" id="libro_id" name="libro_id" required>
                        <option selected disabled value="">Seleccione un libro...</option>
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}" {{ $book->id == $prestamo->libro_id ? 'selected' : '' }}>
                                {{ $book->título }} ({{ $book->autor }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="lector_id" class="form-label">Lector</label>
                    <select class="form-select" id="lector_id" name="lector_id" required>
                        <option selected disabled value="">Seleccione un lector...</option>
                        @foreach ($readers as $reader)
                            <option value="{{ $reader->id }}" {{ $reader->id == $prestamo->lector_id ? 'selected' : '' }}>
                                {{ $reader->nombre }} {{ $reader->apellido }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="fecha_préstamo" class="form-label">Fecha de Préstamo</label>
                    <input type="date" class="form-control" id="fecha_préstamo" name="fecha_préstamo"
                        value="{{ $prestamo->fecha_préstamo }}" required>
                </div>

                <div class="mb-3">
                    <label for="fecha_devolución" class="form-label">Fecha de Devolución</label>
                    <input type="date" class="form-control" id="fecha_devolución" name="fecha_devolución"
                        value="{{ $prestamo->fecha_devolución }}">
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-danger">Actualizar</button>
                    <a href="{{ route('prestamos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>