<x-admin-layout>
    
    <div class="flex justify-end w-full">
        <a href="{{ route('atletas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-lg p-2 mr-5">
            Nuevo Atleta
        </a>
    </div>

    <div class="shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between pb-4 bg-white">            
            <label for="table-search" class="sr-only">Buscar</label>
            <div>
                <input type="text" id="table-search-users"
                    class="p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Buscar...">
            </div>            
        </div>

        <table class="table-auto w-full lg:w-11/12 text-sm text-left text-gray-500 mx-auto">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Atleta
                    </th>
                    <th scope="col" class="text-center">
                        Documento
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($atletas as $atleta)                    
                
                    <tr class="bg-white border-b hover:bg-gray-50">                    
                        <th scope="row" class="flex items-center px-4 py-4 text-gray-900 whitespace-nowrap">
                            <a href="{{ route('atletas.show', $atleta) }}">
                                <img class="w-12 h-12 rounded-full" src="{{ $atleta->imagen }}" alt="{{ $atleta->primer_nombre }} {{ $atleta->primer_apellido }}">
                            </a>
                            <div class="pl-3">
                                <a href="{{ route('atletas.show', $atleta) }}">
                                    <div class="text-base font-semibold">{{ $atleta->primer_nombre }} {{ $atleta->primer_apellido }}</div>
                                    <div class="text-gray-500">{{ $atleta->categoria->nombre }}</div>
                                </a>
                            </div>                            
                        </th>

                        <td class="text-center">
                            {{ number_format($atleta->documento, 0, ',', '.') }}
                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>
        <div class="mt-4 py-4 text-xs">
            {{ $atletas->links() }}
        </div>
        
    </div>


</x-admin-layout>
