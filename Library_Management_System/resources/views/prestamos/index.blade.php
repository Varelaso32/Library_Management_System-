<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Préstamos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-primary leading-tight">
                {{ __('📚 Listado de Préstamos') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <div class="card-style p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="mb-0 text-primary"><i class="bi bi-journal-text me-2"></i>Préstamos registrados</h4>
                    <a href="{{ route('prestamos.create') }}" class="btn btn-libreria">
                        <i class="bi bi-plus-circle me-1"></i>Nuevo Préstamo
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Libro</th>
                                <th>Lector</th>
                                <th>Fecha de Préstamo</th>
                                <th>Fecha de Devolución</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($prestamos as $prestamo)
                                <tr>
                                    <td>{{ $prestamo->id }}</td>
                                    <td>{{ $prestamo->book_title }}</td>
                                    <td>{{ $prestamo->reader_name }}</td>
                                    <td>{{ $prestamo->fecha_préstamo }}</td>
                                    <td>{{ $prestamo->fecha_devolución ?? 'Pendiente' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($prestamo->created_at)->format('d/m/Y H:i') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($prestamo->updated_at)->format('d/m/Y H:i') }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('prestamos.edit', ['prestamo' => $prestamo->id]) }}"
                                                class="btn btn-outline-primary btn-icon" title="Editar">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>

                                            <form action="{{ route('prestamos.destroy', ['prestamo' => $prestamo->id]) }}"
                                                method="POST" onsubmit="return confirm('¿Deseas eliminar este préstamo?');">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger btn-icon" title="Eliminar">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center text-muted">No hay préstamos registrados.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>