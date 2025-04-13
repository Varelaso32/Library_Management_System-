<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Bienvenido al Sistema de Biblioteca 📚') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-white via-blue-50 to-white min-h-screen">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Libros -->
                <a href="{{ route('books.index') }}"
                    class="bg-white border-2 border-[#0077b6] hover:bg-[#e0f4ff] shadow-lg hover:shadow-xl rounded-3xl p-8 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                    <div class="text-4xl mb-3">📚</div>
                    <h3 class="text-xl font-bold text-[#0077b6] mb-2">Libros</h3>
                    <p class="text-gray-700 text-sm">Gestiona el inventario y catálogo de libros disponibles en la biblioteca.</p>
                </a>

                <!-- Lectores -->
                <a href="{{ route('readers.index') }}"
                    class="bg-white border-2 border-[#0077b6] hover:bg-[#e0f4ff] shadow-lg hover:shadow-xl rounded-3xl p-8 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                    <div class="text-4xl mb-3">🧑‍🎓</div>
                    <h3 class="text-xl font-bold text-[#0077b6] mb-2">Lectores</h3>
                    <p class="text-gray-700 text-sm">Administra a los lectores registrados y su historial de préstamos.</p>
                </a>

                <!-- Préstamos -->
                <a href="{{ route('prestamos.index') }}"
                    class="bg-white border-2 border-[#0077b6] hover:bg-[#e0f4ff] shadow-lg hover:shadow-xl rounded-3xl p-8 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105">
                    <div class="text-4xl mb-3">📖</div>
                    <h3 class="text-xl font-bold text-[#0077b6] mb-2">Préstamos</h3>
                    <p class="text-gray-700 text-sm">Consulta, registra y gestiona los préstamos de libros en curso.</p>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>