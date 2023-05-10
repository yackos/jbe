<x-admin-layout>

    <div class="w-full bg-gray-900 py-5 mb-6">
        <H1 class="font-bold text-4xl text-white text-center">LISTADO DE CATEGORIAS</H1> 
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full lg:w-11/12 mx-auto">

        <div class="flex justify-end mb-6">
            <a href="{{ route('categorias.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Nueva Categoria
            </a>
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-md font-semibold">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Entrenador
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categorias as $categoria)
                    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                            {{$categoria->nombre}}
                        </th>
                        <td class="px-6 py-4 text-center">
                            {{$categoria->Entrenador}}
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{route('categorias.edit', $categoria)}}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Edit</a>
                        </td>
                    </tr>

                @endforeach
               
            </tbody>
        </table>
    </div>


</x-admin-layout>
