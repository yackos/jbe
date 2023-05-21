<x-admin-layout>
    <form class="bg-white rounded-lg shadow-lg px-5 pb-5" action="{{route('atletas.update', $atleta)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="flex flex-col md:flex-row items-center max-h-96 md:max-h-48 relative">
            <div class="w-56 h-56 md:w-40 md:h-40">
                <img class="rounded-full object-cover object-center w-40 h-40" src="{{$atleta->imagen}}" id="imgPreview">
            </div>

            <div class="absolute text-center bottom-28 md:bottom-10 xl:bottom-8 md:left-4 xl:left-5">
                <label class="text-gray-300 flex flex-col cursor-pointer">
                    <i class="fa-solid fa-camera"></i>
                    Agregar Foto
                    <input class="hidden" name="imagen" type="file" accept="image/*" onchange="previewImage(event, '#imgPreview')">
                </label>
            </div>

            <div class="w-full text-3xl md:text-5xl font-bold pl-8 text-center md:text-left">                
                 Edición del Atleta
            </div>
        </div>

        <div class="grid gap-6 mb-6 md:grid-cols-5 mt-8">
            <div>
                <label for="primer_nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Nombre</label>
                <input type="text" id="primer_nombre" value="{{old('primer_nombre', $atleta->primer_nombre)}}" name="primer_nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono" required>
                @error('primer_nombre')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div>
                <label for="segundo_nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Segundo Nombre</label>
                <input type="text" id="segundo_nombre" name="segundo_nombre" value="{{old('segundo_nombre', $atleta->segundo_nombre)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Segundo Nombre...">
            </div>
            <div>
                <label for="primer_apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer Apellido</label>
                <input type="text" id="primer_apellido" name="primer_apellido" value="{{old('primer_apellido', $atleta->primer_apellido)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono" required>
                @error('primer_apellido')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div>
                <label for="segundo_apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Segundo Apellido</label>
                <input type="text" id="segundo_apellido" name="segundo_apellido" value="{{old('segundo_apellido', $atleta->segundo_apellido)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Segundo Apellido...">
            </div>
            <div>
                <label for="documento" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Documento</label>
                <input type="number" id="documento" value="{{old('documento', $atleta->documento)}}" name="documento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono" required>
                @error('documento')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-6">
            <div>
                <label for="fecha_nac" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha Nacimiento</label>
                <input type="date" id="fecha_nac" name="fecha_nac" value="{{old('fecha_nac', $atleta->fecha_nac)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @error('fecha_nac')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="col-span-1">
                <label for="edad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</label>
                <input type="number" id="edad" name="edad" value="{{old('edad', $atleta->edad)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Edad..." required>
                @error('edad')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div>
                <label for="sexo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                <select id="sexo" name="sexo" @selected(old('sexo', $atleta->sexo)) class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
            <div>
                <label for="telefono" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                <input type="tel" id="telefono" name="telefono" value="{{old('telefono', $atleta->telefono)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese # de Telefono..." required>
                @error('telefono')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
            <div class="col-span-2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electronico</label>
                <input type="email" id="email" name="email" value="{{old('email', $atleta->email)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese E-mail..." required>
                @error('email')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
        </div>
        <div class="grid gap-6 mb-6 lg:grid-cols-6">
            <div>
                <label for="categoria_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione Categoria</label>
                <select id="categoria_id" name="categoria_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" @selected(old('categoria_id', $atleta->categoria_id) == $categoria->id)>{{ $categoria->nombre }}</option>
                    @endforeach                    
                </select>
            </div>
            <div class="xs:col-span-4 lg:col-span-5">
                <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</label>
                <input type="text" id="direccion" name="direccion" value="{{old('direccion', $atleta->direccion)}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese Dirección..." required>
                @error('direccion')
                    <div>
                        <small class="text-red-600">{{ $message }}</small>
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-6">
            <label for="observaciones" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</label>
            <textarea type="text" rows="4" id="observaciones" name="observaciones" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono">{{old('direccion', $atleta->observaciones)}}</textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar
        </button>
    </form>


    <script>
        function previewImage(event, querySelector){

            //Recuperamos el input que desencadeno la acción
            const input = event.target;

            //Recuperamos la etiqueta img donde cargaremos la imagen
            $imgPreview = document.querySelector(querySelector);

            // Verificamos si existe una imagen seleccionada
            if(!input.files.length) return

            //Recuperamos el archivo subido
            file = input.files[0];

            //Creamos la url
            objectURL = URL.createObjectURL(file);

            //Modificamos el atributo src de la etiqueta img
            $imgPreview.src = objectURL;
                    
        }
    </script>

</x-admin-layout>