<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Bienvenido al Sistema de Biblioteca 📚') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Libros -->
                <a href="{{ route('books.index') }}" class="bg-white border border-[#0077b6] hover:bg-[#e0f4ff] shadow-md hover:shadow-lg rounded-2xl p-6 transition duration-300">
                    <h3 class="text-lg font-bold text-[#0077b6] mb-2">📚 Libros</h3>
                    <p class="text-black text-sm">Gestiona el inventario de libros disponibles.</p>
                </a>

                <!-- Lectores -->
                <a href="{{ route('readers.index') }}" class="bg-white border border-[#0077b6] hover:bg-[#e0f4ff] shadow-md hover:shadow-lg rounded-2xl p-6 transition duration-300">
                    <h3 class="text-lg font-bold text-[#0077b6] mb-2">🧑‍🎓 Lectores</h3>
                    <p class="text-black text-sm">Administra los usuarios que pueden realizar préstamos.</p>
                </a>

                <!-- Préstamos -->
                <a href="{{ route('prestamos.index') }}" class="bg-white border border-[#0077b6] hover:bg-[#e0f4ff] shadow-md hover:shadow-lg rounded-2xl p-6 transition duration-300">
                    <h3 class="text-lg font-bold text-[#0077b6] mb-2">📖 Préstamos</h3>
                    <p class="text-black text-sm">Consulta y gestiona los libros prestados.</p>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>