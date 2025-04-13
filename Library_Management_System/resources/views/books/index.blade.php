<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/indexStyle.css') }}">
</head>

<body>
    <x-app-layout>
    <x-slot name="header">
            <h2 class="font-semibold text-xl text-primary leading-tight">
                {{ __('📚 Listado de Libros') }}
            </h2>
        </x-slot>

        <div class="container mt-5">
            <div class="card-style p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm ms-auto">
                        <i class="bi bi-plus-lg me-1"></i>Agregar nuevo libro
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle">
                        <thead class="table-primary text-center">
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>ISBN</th>
                                <th>Año de Publicación</th>
                                <th>Editorial</th>
                                <th>Creado</th>
                                <th>Actualizado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->título }}</td>
                                <td>{{ $book->autor }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->año_publicación }}</td>
                                <td>{{ $book->editorial }}</td>
                                <td>{{ \Carbon\Carbon::parse($book->created_at)->format('d/m/Y H:i') }}</td>
                                <td>{{ \Carbon\Carbon::parse($book->updated_at)->format('d/m/Y H:i') }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('books.edit', ['book' => $book->id]) }}"
                                            class="btn btn-outline-dark btn-icon" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('books.destroy', ['book' => $book->id]) }}"
                                            method="POST"
                                            onsubmit="return confirm('¿Estás seguro de eliminar este libro?');">
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
                                <td colspan="9" class="text-center text-muted">No hay libros registrados.</td>
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