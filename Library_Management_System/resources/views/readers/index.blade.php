<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Lectores</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos personalizados si los tienes -->
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-primary leading-tight">
                {{ __('🧑‍🎓 Listado de Lectores') }}
            </h2>
        </x-slot>

        <div class="container mt-5">
            <div class="card-style p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a href="{{ route('readers.create') }}" class="btn btn-primary btn-sm ms-auto">
                        <i class="bi bi-plus-lg me-1"></i>Agregar nuevo lector
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($readers as $reader)
                            <tr>
                                <td>{{ $reader->id }}</td>
                                <td>{{ $reader->nombre }}</td>
                                <td>{{ $reader->apellido }}</td>
                                <td>{{ $reader->dirección }}</td>
                                <td>{{ $reader->teléfono }}</td>
                                <td>{{ $reader->email }}</td>
                                <td>{{ \Carbon\Carbon::parse($reader->created_at)->format('d/m/Y H:i') }}</td>
                                <td>{{ \Carbon\Carbon::parse($reader->updated_at)->format('d/m/Y H:i') }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('readers.edit', ['reader' => $reader->id]) }}"
                                            class="btn btn-outline-dark btn-icon" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('readers.destroy', ['reader' => $reader->id]) }}"
                                            method="POST"
                                            onsubmit="return confirm('¿Estás seguro de eliminar este lector?');">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-icon" title="Eliminar">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted">No hay lectores registrados.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>