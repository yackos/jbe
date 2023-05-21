<x-admin-layout>

    <div class="flex p-6 font-mono w-full">
        <div
            class="flex-none w-48 h-48 mb-10 relative z-10 before:absolute before:top-1 before:left-1 before:w-full before:h-full before:bg-gray-400 before:rounded-lg before:shadow-lg">
            <img src="{{ $atleta->imagen }}" alt="{{ $atleta->primer_nombre }}_{{ $atleta->primer_apellido }}"
                class="absolute z-10 inset-0 w-full h-full object-cover rounded-lg" loading="lazy" />
        </div>
        <div
            class="relative flex flex-wrap items-baseline pb-6 before:bg-gray-700 before:absolute before:-top-6 before:bottom-0 before:-left-60 before:-right-6 w-full shadow-2xl">
            <h2 class="relative w-full flex-none text-2xl font-semibold text-white ml-6">
                {{ $atleta->primer_nombre }} {{ $atleta->segundo_nombre }}
            </h2>
            <h2 class="relative w-full flex-none mb-2 text-2xl font-semibold text-white ml-6">
                {{ $atleta->primer_apellido }} {{ $atleta->segundo_apellido }}
            </h2>
            <div class="relative ml-6">
                <h2 class="text-xl text-teal-400">
                    {{ $atleta->edad }} años | {{ $atleta->sexo }}
                </h2>
            </div>
        </div>
    </div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg container">
        <table class="w-full text-sm text-center text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Peso
                    </th>
                    <th scope="col" class="px-6 py-3 hidden md:block">
                        Talla
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tallas as $talla)                    
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$i}}
                        </th>
                        <td class="px-6 py-4">
                            {{ date('d/m/Y', strtotime($talla->created_at)) }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $talla->peso }}
                        </td>
                        <td class="px-6 py-4 hidden md:block">
                            {{ $talla->talla }}
                        </td>
                        <td class="px-6 py-4">
                            <button data-modal-target="indicesModal" data-modal-toggle="indicesModal" class="px-3 py-2 text-xs font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Ver Indices y Phantoms</button>
                        </td>
                    </tr>
                    <span class="hidden">{{$i = $i + 1}}</span>
                @endforeach
            </tbody>
        </table>
    </div>

    

    <!-- Modal de Indices -->
    <div id="indicesModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Indices  /  Phantoms  /  Somatotipos
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="indicesModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form class="bg-white rounded-lg shadow-lg px-5 pb-5" action="" method="POST">
                        @csrf

                        <div class="grid gap-4 mb-6 md:grid-cols-5 mt-8">
                            <div>
                                <label for="masa_corp" class="block mb-2 text-xs font-medium text-gray-900">Masa Corporal</label>
                                <input type="text" id="masa_corp" value="{{ (($talla->peso * ((170.18 / $talla->talla)*(170.18 / $talla->talla)*(170.18 / $talla->talla))) - 64.58) / 8.6 }}" name="masa_corp"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            </div>
                            {{-- <div>
                                <label for="segundo_nombre"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Segundo
                                    Nombre</label>
                                <input type="text" id="segundo_nombre" name="segundo_nombre"
                                    value="{{ old('segundo_nombre', $atleta->segundo_nombre) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ingrese Segundo Nombre...">
                            </div>
                            <div>
                                <label for="primer_apellido"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer
                                    Apellido</label>
                                <input type="text" id="primer_apellido" name="primer_apellido"
                                    value="{{ old('primer_apellido', $atleta->primer_apellido) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono"
                                    required>
                                @error('primer_apellido')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="segundo_apellido"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Segundo
                                    Apellido</label>
                                <input type="text" id="segundo_apellido" name="segundo_apellido"
                                    value="{{ old('segundo_apellido', $atleta->segundo_apellido) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ingrese Segundo Apellido...">
                            </div>
                            <div>
                                <label for="documento"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No.
                                    Documento</label>
                                <input type="number" id="documento"
                                    value="{{ old('documento', $atleta->documento) }}" name="documento"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono"
                                    required>
                                @error('documento')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div> --}}
                        </div>
                        {{-- <div class="grid gap-6 mb-6 md:grid-cols-6">
                            <div>
                                <label for="fecha_nac"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha
                                    Nacimiento</label>
                                <input type="date" id="fecha_nac" name="fecha_nac"
                                    value="{{ old('fecha_nac', $atleta->fecha_nac) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required>
                                @error('fecha_nac')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-span-1">
                                <label for="edad"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edad</label>
                                <input type="number" id="edad" name="edad"
                                    value="{{ old('edad', $atleta->edad) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ingrese Edad..." required>
                                @error('edad')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="sexo"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                                <select id="sexo" name="sexo" @selected(old('sexo', $atleta->sexo))
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                            <div>
                                <label for="telefono"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono</label>
                                <input type="tel" id="telefono" name="telefono"
                                    value="{{ old('telefono', $atleta->telefono) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ingrese # de Telefono..." required>
                                @error('telefono')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo
                                    Electronico</label>
                                <input type="email" id="email" name="email"
                                    value="{{ old('email', $atleta->email) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ingrese E-mail..." required>
                                @error('email')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 lg:grid-cols-6">
                            <div>
                                <label for="categoria_id"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccione
                                    Categoria</label>
                                <select id="categoria_id" name="categoria_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}" @selected(old('categoria_id', $atleta->categoria_id) == $categoria->id)>
                                            {{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="xs:col-span-4 lg:col-span-5">
                                <label for="direccion"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</label>
                                <input type="text" id="direccion" name="direccion"
                                    value="{{ old('direccion', $atleta->direccion) }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Ingrese Dirección..." required>
                                @error('direccion')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="observaciones"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Observaciones</label>
                            <textarea type="text" rows="4" id="observaciones" name="observaciones"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono">{{ old('direccion', $atleta->observaciones) }}</textarea>
                        </div> --}}
                         <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Guardar
                            </button>
                         <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="indicesModal" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Guardar</button>
                            <button data-modal-hide="indicesModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancelar</button>
                        </div> 
                     </form>
                    <!-- Modal footer -->

                </div>

            </div>
        </div>
    </div>


</x-admin-layout>
