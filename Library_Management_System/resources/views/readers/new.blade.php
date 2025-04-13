<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Lector</title>

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
                {{ __('📝 Agregar Lector') }}
            </h2>
        </x-slot>

        <div class="container mt-4">
            <div class="card-style p-4">
                <form method="POST" action="{{ route('readers.store') }}">
                    @csrf

                    <div class="row g-3">
                        <!-- Nombre -->
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre</label>
                            <div class="input-group-icon">
                                <i class="bi bi-person form-icon"></i>
                                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ingrese el nombre">
                            </div>
                        </div>

                        <!-- Apellido -->
                        <div class="col-md-6">
                            <label for="apellido" class="form-label">Apellido</label>
                            <div class="input-group-icon">
                                <i class="bi bi-person form-icon"></i>
                                <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Ingrese el apellido">
                            </div>
                        </div>

                        <!-- Dirección -->
                        <div class="col-md-6">
                            <label for="dirección" class="form-label">Dirección</label>
                            <div class="input-group-icon">
                                <i class="bi bi-geo-alt form-icon"></i>
                                <input type="text" class="form-control" id="dirección" name="dirección" required placeholder="Ingrese la dirección">
                            </div>
                        </div>

                        <!-- Teléfono -->
                        <div class="col-md-6">
                            <label for="teléfono" class="form-label">Teléfono</label>
                            <div class="input-group-icon">
                                <i class="bi bi-telephone form-icon"></i>
                                <input type="text" class="form-control" id="teléfono" name="teléfono" required placeholder="Ingrese el teléfono">
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-12">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <div class="input-group-icon">
                                <i class="bi bi-envelope form-icon"></i>
                                <input type="email" class="form-control" id="email" name="email" required placeholder="Ingrese el correo electrónico">
                            </div>
                        </div>
                    </div>

                    <!-- Botones -->
                    <div class="d-flex justify-content-end mt-4 gap-2">
                        <a href="{{ route('readers.index') }}" class="btn btn-outline-secondary btn-sm-custom">
                            <i class="bi bi-x-circle me-1"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-libreria btn-sm-custom">
                            <i class="bi bi-save me-1"></i> Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </x-app-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>