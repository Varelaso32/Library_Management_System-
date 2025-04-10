<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Préstamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card-style {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .btn-libreria {
            background-color: #0077b6;
            color: white;
            border-radius: 8px;
            padding: 0.4rem 0.8rem;
        }

        .btn-libreria:hover {
            background-color: #023e8a;
        }

        .form-label {
            font-weight: 500;
            color: #343a40;
        }

        h4.text-libreria {
            color: #0077b6;
        }

        .form-select,
        .form-control {
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-primary leading-tight">
                {{ __('📝 Registrar Préstamo') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <div class="card-style p-4">
                <h4 class="mb-4 text-libreria">
                    <i class="bi bi-journal-plus me-2"></i>Nuevo Préstamo
                </h4>

                <form method="POST" action="{{ route('prestamos.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="libro_id" class="form-label">📚 Libro</label>
                        <select class="form-select" id="libro_id" name="libro_id" required>
                            <option selected disabled value="">Seleccione un libro...</option>
                            @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ $book->título }} - {{ $book->autor }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="lector_id" class="form-label">👤 Lector</label>
                        <select class="form-select" id="lector_id" name="lector_id" required>
                            <option selected disabled value="">Seleccione un lector...</option>
                            @foreach ($readers as $reader)
                                <option value="{{ $reader->id }}">{{ $reader->nombre }} {{ $reader->apellido }} - {{ $reader->email }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_préstamo" class="form-label">📅 Fecha de Préstamo</label>
                        <input type="date" class="form-control" id="fecha_préstamo" name="fecha_préstamo" required>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_devolución" class="form-label">📅 Fecha de Devolución (opcional)</label>
                        <input type="date" class="form-control" id="fecha_devolución" name="fecha_devolución">
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-libreria">
                            <i class="bi bi-save me-1"></i> Guardar
                        </button>
                        <a href="{{ route('prestamos.index') }}" class="btn btn-secondary">
                            <i class="bi bi-x-circle me-1"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
