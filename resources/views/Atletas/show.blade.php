<x-admin-layout>
    <div class="fixed top-14 left-0 z-20 w-full h-16 bg-gray-100 border-t border-gray-300">
        <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
            <a href="{{route('atletas.edit', $atleta)}}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Editar</span>
            </a>
            <a href="{{route('tallas.show', $atleta->id)}}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Tallas</span>
            </a>
            <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor" viewBox="0 0 22 22" aria-hidden="true">
                    <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Salud</span>
            </a>
            <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"></path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Indices</span>
            </a>
        </div>
    </div>
    
    <div class="bg-gray-200 rounded-lg shadow p-3 mt-8">
        <div class="flex p-6 font-mono w-full">
            <div class="flex-none w-48 h-48 mb-10 relative z-10 before:absolute before:top-1 before:left-1 before:w-full before:h-full before:bg-gray-400 before:rounded-lg before:shadow-lg">
                <img src="{{$atleta->imagen}}" alt="{{$atleta->primer_nombre}}_{{$atleta->primer_apellido}}" class="absolute z-10 inset-0 w-full h-full object-cover rounded-lg" loading="lazy" />
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
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Documento</label>
                <input type="text" class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{number_format($atleta->documento, '0', ',', '.')}}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Sexo</label>
                <input type="text" class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->sexo}}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Fecha Nac:</label>
                <input type="date" class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->fecha_nac}}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Edad: </label>
                <input type="text" class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->edad}}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Sexo: </label>
                <input type="text" class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->sexo}}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Teléfono: </label>
                <input type="text" class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->telefono}}" disabled>
            </div>
            <div class="col-span-2">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">E-mail: </label>
                <input type="text" class="p-2 w-full block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->email}}" disabled>
            </div>
            
        </div>
        <div class="mt-4">
            <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Dirección: </label>
            <input type="text" class="p-2 w-full block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" value="{{$atleta->direccion}}" disabled>
        </div>
        <div class="mt-4">
            <label class="mb-2 text-md md:text-sm font-medium text-gray-900 dark:text-white">Observaciones: </label>
            <textarea class="p-2 w-full block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500" rows="3" disabled>{{$atleta->observaciones}}</textarea>
        </div>
    </div>

    
        <div class="bg-gray-200 rounded-lg shadow p-3 mt-8">
            <h2 class="text-2xl font-semibold text-center mt-2">TALLAS DEL ATLETA</h2>
            
            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 md:w-3/4 mx-auto">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">  
                        <h2 class="text-lg font-semibold text-center w-full bg-gray-600 text-white">BASE</h2>                  
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-slate-300">
                                Peso
                            </th>
                            <th scope="col" class="px-6 py-3 bg-slate-300">
                                Talla
                            </th>
                            <th scope="col" class="px-6 py-3 bg-slate-300">
                                T. Sentado
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

                {{-- --- DIAMETROS PANTALLAS GRANDES --- --}}
            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 mx-auto hidden md:block">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">  
                        <h2 class="text-lg font-semibold text-center w-full bg-lime-900 text-white">DIAMETROS</h2>                  
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Biacromial
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Torax Transv
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Torax Antpost
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Bi-Liocrestideo
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Humeral
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Femoral
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                
                {{-- --- DIAMETROS PANTALLAS MOBILES --- --}}
            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 mx-auto md:hidden">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">  
                        <h2 class="text-lg font-semibold text-center w-full bg-lime-900 text-white">DIAMETROS</h2>                  
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Biacromial
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Torax Transv
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Torax Antpost
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">                                     
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Bi-Liocrestideo
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Humeral
                            </th>
                            <th scope="col" class="px-6 py-3 bg-lime-100">
                                Femoral
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

                {{-- --- PERIMETROS PANTALLAS GRANDES --- --}}
            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 mx-auto hidden md:block">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">  
                        <h2 class="text-lg font-semibold text-center w-full bg-amber-900 text-white">PERIMETROS</h2>                  
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Cabeza
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Brazo Relajado
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Brazo Flex_Ten
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Antebrazo
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Torax
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">                
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Cintura
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Cadera Max
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Muslo Max
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Muslo Med
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Pantorrilla Max
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                
                {{-- --- PERIMETROS PANTALLAS MOBILES --- --}}
            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 mx-auto md:hidden">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">  
                        <h2 class="text-lg font-semibold text-center w-full bg-amber-900 text-white">PERIMETROS</h2>                  
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Cabeza
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Brazo Relajado
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Brazo Flex_Ten
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">                
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Antebrazo
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Torax
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Cintura
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">                
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Cadera Max
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Muslo Max
                            </th>
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Muslo Med
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">                
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-amber-100">
                                Pantorrilla Max
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            
                {{-- --- PLIEGUES PANTALLAS GRANDES --- --}}
            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 mx-auto hidden md:block">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">  
                        <h2 class="text-lg font-semibold text-center w-full bg-violet-900 text-white">PLIEGUES</h2>                  
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Triceps
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Subescapular
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Supraespinal
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Abdominal
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                P Muslo Medio
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Pantorrilla
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
                
                {{-- --- PLIEGUES PANTALLAS MOBILES --- --}}
            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 mx-auto md:hidden">
                <table class="w-full text-sm text-left text-gray-500 table-auto">
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">  
                        <h2 class="text-lg font-semibold text-center w-full bg-violet-900 text-white">PLIEGUES</h2>                  
                        <tr>                        
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Triceps
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Subescapular
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Supraespinal
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                    <thead class="text-gray-700 uppercase bg-gray-50 text-center">                                     
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Abdominal
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                P Muslo Medio
                            </th>
                            <th scope="col" class="px-6 py-3 bg-violet-100">
                                Pantorrilla
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                            <td class="px-6 py-4">
                                44,5
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <h2 class="text-lg font-semibold text-center w-full bg-violet-900 text-white">TITULO DE PRUEBA</h2> 

</x-admin-layout>
