<x-admin-layout>
    
    <div class="flex p-6 font-mono w-full">
        <div class="flex-none w-48 h-48 mb-10 relative z-10 before:absolute before:top-1 before:left-1 before:w-full before:h-full before:bg-gray-400">
            <img src="{{$atleta->imagen_url}}" alt="" class="absolute z-10 inset-0 w-full h-full object-cover rounded-lg" loading="lazy" />
        </div>
        <div class="relative flex flex-wrap items-baseline pb-6 before:bg-gray-700 before:absolute before:-top-6 before:bottom-0 before:-left-60 before:-right-6 w-full shadow-2xl">
            <h1 class="relative w-full flex-none text-2xl font-semibold text-white ml-6">
              {{$atleta->primer_nombre}} {{$atleta->segundo_nombre}}
            </h1>
            <h1 class="relative w-full flex-none mb-2 text-2xl font-semibold text-white ml-6">
                {{$atleta->primer_apellido}} {{$atleta->segundo_apellido}}
              </h1>
            <div class="relative ml-6">
                <h2 class="text-xl text-teal-400">
                -- {{$atleta->categoria->nombre}} --
                </h2>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-4">
        <div class="">
            <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Documento</label>
            <input type="text" class="p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{number_format($atleta->documento, '0', ',', '.')}}" disabled>
        </div>
        <div class="">
            <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
            <input type="text" class="p-2 block sm:inline text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->sexo}}" disabled>
        </div>
    </div>

</x-admin-layout>
