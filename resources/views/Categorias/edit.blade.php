<x-admin-layout>
    
   <form class="bg-white rounded-lg shadow-lg px-5 pb-5" action="{{route('categorias.update', $categoria)}}" method="post">
    
        @csrf
        @method('PUT')

        <div class="w-full text-3xl md:text-5xl font-bold pl-8 text-center mb-8 pt-6">                
            Edición de la Categoria
       </div>

        <div class="grid gap-6 mb-6 md:grid-cols-3">
            <div>
                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900">Nombre: </label>
                <input type="text" value="{{ old('nombre', $categoria->nombre) }}" id="nombre" name="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese Nombre de la Categoria..." required>
                @error('nombre')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="col-span-2">
                <label for="entrenador" class="block mb-2 text-sm font-medium text-gray-900">Nombre del Entrenador</label>
                <input type="text" value="{{ old('entrenador', $categoria->entrenador) }}" id="entrenador" name="entrenador" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Nombre del Entrenador..." required>
                @error('entrenador')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            
        </div>
        <button type="submit" class="mx-auto bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar
        </button>
    </form>

</x-admin-layout>