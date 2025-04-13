<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Préstamo</title>

    <!-- Bootstrap + Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/newStyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-primary leading-tight">
                {{ __('✒️ Editar Préstamo') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <div class="card-style p-4">
                <form method="POST" action="{{ route('prestamos.update', ['prestamo' => $prestamo->id]) }}">
                    @method('PUT')
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" value="{{ $prestamo->id }}" disabled>
                            <div class="form-text text-dark">ID del préstamo</div>
                        </div>

                        <div class="col-md-6">
                            <label for="libro_id" class="form-label">Libro</label>
                            <div class="input-group-icon">
                                <i class="bi bi-book form-icon"></i>
                                <select class="form-select" id="libro_id" name="libro_id" required>
                                    <option selected disabled value="">Seleccione un libro...</option>
                                    @foreach ($books as $book)
                                        <option value="{{ $book->id }}" {{ $book->id == $prestamo->libro_id ? 'selected' : '' }}>
                                            {{ $book->título }} ({{ $book->autor }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="lector_id" class="form-label">Lector</label>
                            <div class="input-group-icon">
                                <i class="bi bi-person form-icon"></i>
                                <select class="form-select" id="lector_id" name="lector_id" required>
                                    <option selected disabled value="">Seleccione un lector...</option>
                                    @foreach ($readers as $reader)
                                        <option value="{{ $reader->id }}" {{ $reader->id == $prestamo->lector_id ? 'selected' : '' }}>
                                            {{ $reader->nombre }} {{ $reader->apellido }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="fecha_préstamo" class="form-label">Fecha de Préstamo</label>
                            <div class="input-group-icon">
                                <i class="bi bi-calendar-event form-icon"></i>
                                <input type="date" class="form-control" id="fecha_préstamo" name="fecha_préstamo"
                                    value="{{ $prestamo->fecha_préstamo }}" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="fecha_devolución" class="form-label">Fecha de Devolución</label>
                            <div class="input-group-icon">
                                <i class="bi bi-calendar-check form-icon"></i>
                                <input type="date" class="form-control" id="fecha_devolución" name="fecha_devolución"
                                    value="{{ $prestamo->fecha_devolución }}">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4 gap-2">
                        <a href="{{ route('prestamos.index') }}" class="btn btn-outline-secondary btn-sm-custom">
                            <i class="bi bi-arrow-left me-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-libreria btn-sm-custom">
                            <i class="bi bi-check2-circle me-1"></i> Actualizar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>