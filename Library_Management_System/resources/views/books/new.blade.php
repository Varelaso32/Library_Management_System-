<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>

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
                {{ __('📝 Agregar Libro') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <div class="card-style p-4">
                <form method="POST" action="{{ route('books.store') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="título" class="form-label">Título</label>
                            <div class="input-group-icon">
                                <i class="bi bi-book form-icon"></i>
                                <input type="text" class="form-control" id="título" name="título" required placeholder="Título del libro">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="autor" class="form-label">Autor</label>
                            <div class="input-group-icon">
                                <i class="bi bi-person form-icon"></i>
                                <input type="text" class="form-control" id="autor" name="autor" required placeholder="Autor">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="isbn" class="form-label">ISBN</label>
                            <div class="input-group-icon">
                                <i class="bi bi-upc-scan form-icon"></i>
                                <input type="text" class="form-control" id="isbn" name="isbn" required placeholder="ISBN">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="año_publicación" class="form-label">Año de Publicación</label>
                            <div class="input-group-icon">
                                <i class="bi bi-calendar-date form-icon"></i>
                                <input type="date" class="form-control" id="año_publicación" name="año_publicación" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="editorial" class="form-label">Editorial</label>
                            <div class="input-group-icon">
                                <i class="bi bi-building form-icon"></i>
                                <input type="text" class="form-control" id="editorial" name="editorial" required placeholder="Editorial">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4 gap-2">
                        <a href="{{ route('books.index') }}" class="btn btn-outline-secondary btn-sm-custom">
                            <i class="bi bi-arrow-left me-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-libreria btn-sm-custom">
                            <i class="bi bi-check2-circle me-1"></i> Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>