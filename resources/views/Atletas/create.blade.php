<x-admin-layout>
    <h1 class="text-3xl font-semibold mb-2">Nuevo Atleta</h1>

    
    <form class="bg-white rounded-lg p-6 shadow-lg" action="{{ route('atletas.store') }}" method="POST">
        @csrf

        <div class="grid gap-6 mb-6 md:grid-cols-4">
            <div>
                <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Documento</label>
                <input type="number" value="{{ old('documento') }}" id="documento" name="documento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese # Documento..." required>
                @error('documento')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div>
                <label for="primer_nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Nombre</label>
                <input type="text" value="{{ old('primer_nombre') }}" id="primer_nombre" name="primer_nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Primer Nombre..." required>
                @error('primer_nombre')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div>
                <label for="primer_apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Apellido</label>
                <input type="text" value="{{ old('primer_apellido') }}" id="primer_apellido" name="primer_apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Primer Apellido..." required>
                @error('primer_apellido')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div>
                <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                <select id="sexo" name="sexo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
        </div>
        
        <div class="mb-6">
            <label for="observaciones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</label>
            <input type="text" value="{{ old('observaciones') }}" id="observaciones" name="observaciones" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
            @error('observaciones')
                <div>
                    <small class="text-red-600">{{ $message }}</small>
                </div>
            @enderror
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar
        </button>
    </form>
</x-admin-layout>
