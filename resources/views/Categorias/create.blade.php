<x-admin-layout>
    
    <h1 class="text-3xl font-semibold mb-2">Nueva Categoria</h1>

    
    <form class="bg-white rounded-lg p-6 shadow-lg" action="{{ route('categorias.store') }}" method="POST">
        @csrf

        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre: </label>
                <input type="text" value="{{ old('nombre') }}" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese Nombre de la Categoria..." required>
                @error('nombre')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="col-span-2">
                <label for="entrenador" class="block mb-2 text-sm font-medium text-gray-900">Nombre del Entrenador</label>
                <input type="text" value="{{ old('entrenador') }}" id="entrenador" name="entrenador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Nombre del Entrenador..." required>
                @error('entrenador')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            
        </div>
        
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar
        </button>
    </form>

</x-admin-layout>