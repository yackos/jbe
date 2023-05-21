<x-admin-layout>

    <div class="fixed top-14 left-0 z-20 w-full h-16 bg-gray-100 border-t border-gray-300">
        <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">

            <button data-modal-target="editarModal" data-modal-toggle="editarModal" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor" viewBox="0 0 20 20"
                    aria-hidden="true">
                    <path
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Editar</span>
            </button>
            {{-- <button data-modal-target="tallasModal" data-modal-toggle="tallasModal" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" stroke-width="1.5"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path
                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                    </path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Tallas</span>
            </button> --}}
            
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" stroke-width="1.5"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path
                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z">
                    </path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Tallas</span>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdownNavbar"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                    aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="{{ route('tallas.show', $atleta) }}"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ver Tallas Registradas</a>
                    </li>
                    <li>
                        <button data-modal-target="tallasModal" data-modal-toggle="tallasModal" type="button"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Registrar Nueva Talla</button>
                    </li>
                </ul>
            </div>
            {{-- <a href="{{ route('tallas.show', $atleta) }}"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor"
                    viewBox="0 0 22 22" aria-hidden="true">
                    <path
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                    </path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Tallas</span>
            </a> --}}

            <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor"
                    viewBox="0 0 22 22" aria-hidden="true">
                    <path
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z">
                    </path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Salud</span>
            </a>
            <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor"
                    viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"></path>
                </svg>
                <span class="text-sm text-gray-500 group-hover:text-blue-600">Indices</span>
            </a>
        </div>
    </div>

    <div class="bg-gray-200 rounded-lg shadow p-3 mt-8">
        <div class="flex p-6 font-mono w-full">
            <div class="flex-none w-48 h-48 mb-10 relative z-10 before:absolute before:top-1 before:left-1 before:w-full before:h-full before:bg-gray-400 before:rounded-lg before:shadow-lg">
                <img src="{{ $atleta->imagen }}" alt="{{ $atleta->primer_nombre }}_{{ $atleta->primer_apellido }}" class="absolute z-10 inset-0 w-full h-full object-cover rounded-lg" loading="lazy" />
            </div>
            <div class="relative flex flex-wrap items-baseline pb-6 before:bg-gray-700 before:absolute before:-top-6 before:bottom-0 before:-left-60 before:-right-6 w-full">
                <h1 class="relative w-full flex-none text-2xl font-semibold text-white ml-6">
                    {{ $atleta->primer_nombre }} {{ $atleta->segundo_nombre }}
                </h1>
                <h1 class="relative w-full flex-none mb-2 text-2xl font-semibold text-white ml-6">
                    {{ $atleta->primer_apellido }} {{ $atleta->segundo_apellido }}
                </h1>
                <div class="relative ml-6">
                    <h2 class="text-xl text-teal-400">
                        -- {{ $atleta->categoria->nombre }} --
                    </h2>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Documento</label>
                <input type="text"
                    class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ number_format($atleta->documento, '0', ',', '.') }}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Sexo</label>
                <input type="text"
                    class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $atleta->sexo }}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Fecha Nac:</label>
                <input type="date"
                    class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $atleta->fecha_nac }}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Edad: </label>
                <input type="text"
                    class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $atleta->edad }}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Sexo: </label>
                <input type="text"
                    class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $atleta->sexo }}" disabled>
            </div>
            <div class="">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Teléfono: </label>
                <input type="text"
                    class="p-2 block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $phone }}" disabled>
            </div>
            <div class="col-span-2">
                <label class="mb-2 text-md md:text-sm font-medium text-gray-900">E-mail: </label>
                <input type="text"
                    class="p-2 w-full block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                    value="{{ $atleta->email }}" disabled>
            </div>

        </div>
        <div class="mt-4">
            <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Dirección: </label>
            <input type="text"
                class="p-2 w-full block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                value="{{ $atleta->direccion }}" disabled>
        </div>
        <div class="mt-4">
            <label class="mb-2 text-md md:text-sm font-medium text-gray-900">Observaciones: </label>
            <textarea
                class="p-2 w-full block text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-md md:text-sm focus:ring-blue-500 focus:border-blue-500"
                rows="3" disabled>{{ $atleta->observaciones }}</textarea>
        </div>
    </div>

    @if ($talla)
        <div class="bg-gray-200 rounded-lg shadow p-3 mt-8">
            <h2 class="text-2xl font-semibold text-center mt-2">TALLAS DEL ATLETA</h2>
            <p class="text-sm text-center w-full">Tomadas el {{ date('d/m/Y', strtotime($talla->created_at)) }}</p>
            <div class="w-full grid justify-items-center mt-4">
                <a href="" class="inline-flex mx-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-5 py-2 text-center items-center">
                    Generar Indices, Phantoms y Somatotipos
                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd">
                        </path>
                    </svg>
                </a>
            </div>
                

            <div class="relative overflow-y-auto shadow-md rounded-lg mt-6 md:w-3/4 mx-auto">
                <table class="w-full text-sm text-left text-gray-500 table-fixed">
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
                                {{ $talla->peso }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->talla }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->talla_sentada }}
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
                                {{ $talla->biacromial }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->torax_transv }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->torax_antpost }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->bi_liocrestideo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->humeral }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->femoral }}
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
                                {{ $talla->biacromial }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->torax_transv }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->torax_antpost }}
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
                                {{ $talla->bi_liocrestideo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->humeral }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->femoral }}
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
                                {{ $talla->cabeza }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->brazo_relajado }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->brazo_flex_ten }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->antebrazo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->torax }}
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
                                {{ $talla->cintura }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->cadera_max }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->muslo_max }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->muslo_medio }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->pantorrilla_max }}
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
                                {{ $talla->cabeza }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->brazo_relajado }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->brazo_flex_ten }}
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
                                {{ $talla->antebrazo }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->torax }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->cintura }}
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
                                {{ $talla->cadera_max }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->muslo_max }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->muslo_medio }}
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
                                {{ $talla->pantorrilla_max }}
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
                                {{ $talla->triceps }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->subescapular }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->supraespinal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->abdominal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->pmuslo_medio }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->pantorrilla }}
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
                                {{ $talla->triceps }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->subescapular }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->supraespinal }}
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
                                {{ $talla->abdominal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->pmuslo_medio }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $talla->pantorrilla }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif


    <!-- Modal Editar Atleta -->
    <div id="editarModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Edición del Atleta
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="editarModal">
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
                    <form class="bg-white rounded-lg shadow-lg px-5 pb-5"
                        action="{{ route('atletas.update', $atleta) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="flex flex-col md:flex-row items-center max-h-96 md:max-h-48 relative">
                            <div class="w-56 md:w-40">
                                <img class="rounded-full object-cover object-center" src="{{ $atleta->imagen }}"
                                    id="imgPreview">
                            </div>

                            <div class="absolute text-center bottom-28 md:bottom-10 xl:bottom-8 md:left-4 xl:left-5">
                                <label class="text-gray-300 flex flex-col cursor-pointer">
                                    <i class="fa-solid fa-camera"></i>
                                    Agregar Foto
                                    <input class="hidden" name="imagen" type="file" accept="image/*"
                                        onchange="previewImage(event, '#imgPreview')">
                                </label>
                            </div>

                            <div class="w-full text-3xl md:text-5xl font-bold pl-8 text-center md:text-left">
                                Edición del Atleta
                            </div>
                        </div>

                        <div class="grid gap-6 mb-6 md:grid-cols-5 mt-8">
                            <div>
                                <label for="primer_nombre"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Primer
                                    Nombre</label>
                                <input type="text" id="primer_nombre"
                                    value="{{ old('primer_nombre', $atleta->primer_nombre) }}" name="primer_nombre"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 font-bold text-lg text-blue-700 italic font-mono"
                                    required>
                                @error('primer_nombre')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
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
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-6">
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
                        </div>
                        {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Guardar
                            </button> --}}
                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="editarModal" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Guardar</button>
                            <button data-modal-hide="editarModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancelar</button>
                        </div>
                    </form>
                    <!-- Modal footer -->

                </div>

            </div>
        </div>
    </div>

    <!-- Modal Agregar Tallas -->
    <div id="tallasModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-7xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t bg-gray-600">
                    <h3 class="text-xl font-semibold text-white">
                        Tallas del Atleta
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-hide="tallasModal">
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
                    <form class="bg-white rounded-lg shadow-lg px-5 pb-5" action="{{ route('tallas.store') }}"
                        method="POST">
                        @csrf

                        <input type="number" class="hidden" value="{{ $atleta->id }}" name="atleta_id">

                        <!-- Tallas Base -->
                        <div class="w-full bg-gray-700">
                            <h2 class="text-xl text-white font-semibold text-center">TALLAS BASE</h2>
                        </div>

                        <div class="grid gap-6 mb-6 grid-cols-3 mt-3">

                            <div>
                                <label for="peso"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Peso</label>
                                <input type="float" id="peso" value="{{ old('peso') }}" name="peso"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm"
                                    required>
                                @error('peso')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="talla"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Talla</label>
                                <input type="float" id="talla" value="{{ old('talla') }}" name="talla"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm"
                                    required>
                                @error('talla')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="talla_sentada"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Talla Sentada</label>
                                <input type="float" id="talla_sentada" value="{{ old('talla_sentada') }}"
                                    name="talla_sentada"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm"
                                    required>
                                @error('talla_sentada')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Tallas Diametros -->
                        <div class="w-full bg-lime-900 mt-14">
                            <h2 class="text-xl text-white font-semibold text-center">DIAMETROS</h2>
                        </div>

                        <div class="grid gap-6 mb-6 grid-cols-3 mt-3">

                            <div>
                                <label for="biacromial"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Biacromial</label>
                                <input type="float" id="biacromial" value="{{ old('biacromial') }}"
                                    name="biacromial"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('biacromial')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="torax_transv"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Torax Transv</label>
                                <input type="float" id="torax_transv" value="{{ old('torax_transv') }}"
                                    name="torax_transv"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('torax_transv')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="torax_antpost"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Torax Antpost</label>
                                <input type="float" id="torax_antpost" value="{{ old('torax_antpost') }}"
                                    name="torax_antpost"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('torax_antpost')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="bi_liocrestideo"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Bi_liocrestideo</label>
                                <input type="float" id="bi_liocrestideo" value="{{ old('bi_liocrestideo') }}"
                                    name="bi_liocrestideo"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('bi_liocrestideo')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="humeral"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Humeral</label>
                                <input type="float" id="humeral" value="{{ old('humeral') }}" name="humeral"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('humeral')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="femoral"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Femoral</label>
                                <input type="float" id="femoral" value="{{ old('femoral') }}" name="femoral"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('femoral')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Tallas Perimetros -->
                        <div class="w-full bg-amber-900 mt-14">
                            <h2 class="text-xl text-white font-semibold text-center">PERIMETROS</h2>
                        </div>

                        <div class="grid gap-6 mb-6 grid-cols-3 mt-3">

                            <div>
                                <label for="cabeza"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Cabeza</label>
                                <input type="float" id="cabeza" value="{{ old('cabeza') }}" name="cabeza"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('cabeza')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="brazo_relajado"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Brazo Relajado</label>
                                <input type="float" id="brazo_relajado" value="{{ old('brazo_relajado') }}"
                                    name="brazo_relajado"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('brazo_relajado')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="brazo_flex_ten"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Brazo
                                    flexionado</label>
                                <input type="float" id="brazo_flex_ten" value="{{ old('brazo_flex_ten') }}"
                                    name="brazo_flex_ten"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('brazo_flex_ten')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="antebrazo"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Antebrazo</label>
                                <input type="float" id="antebrazo" value="{{ old('antebrazo') }}"
                                    name="antebrazo"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('antebrazo')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="torax"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Torax</label>
                                <input type="float" id="torax" value="{{ old('torax') }}" name="torax"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('torax')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="cintura"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Cintura</label>
                                <input type="float" id="cintura" value="{{ old('cintura') }}" name="cintura"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('cintura')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="cadera_max"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Cadera Max</label>
                                <input type="float" id="cadera_max" value="{{ old('cadera_max') }}"
                                    name="cadera_max"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('cadera_max')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="muslo_max"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Muslo Max</label>
                                <input type="float" id="muslo_max" value="{{ old('muslo_max') }}"
                                    name="muslo_max"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('muslo_max')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="muslo_medio"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Muslo Medio Max</label>
                                <input type="float" id="muslo_medio" value="{{ old('muslo_medio') }}"
                                    name="muslo_medio"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('muslo_medio')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="pantorrilla_max"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Pantorrilla Max</label>
                                <input type="float" id="pantorrilla_max" value="{{ old('pantorrilla_max') }}"
                                    name="pantorrilla_max"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('pantorrilla_max')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Tallas Pliegues -->
                        <div class="w-full bg-violet-900 mt-14">
                            <h2 class="text-xl text-white font-semibold text-center">PLIEGUES</h2>
                        </div>

                        <div class="grid gap-6 mb-6 grid-cols-3 mt-3">

                            <div>
                                <label for="triceps"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">triceps</label>
                                <input type="float" id="triceps" value="{{ old('triceps') }}" name="triceps"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('triceps')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="subescapular"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Subescapular</label>
                                <input type="float" id="subescapular" value="{{ old('subescapular') }}"
                                    name="subescapular"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('subescapular')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="supraespinal"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Supraespinal</label>
                                <input type="float" id="supraespinal" value="{{ old('supraespinal') }}"
                                    name="supraespinal"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('supraespinal')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="abdominal"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Abdominal</label>
                                <input type="float" id="abdominal" value="{{ old('abdominal') }}"
                                    name="abdominal"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('abdominal')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="pmuslo_medio"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">P Muslo Medio</label>
                                <input type="float" id="pmuslo_medio" value="{{ old('pmuslo_medio') }}"
                                    name="pmuslo_medio"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('pmuslo_medio')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <label for="pantorrilla"
                                    class="inline-block mb-2 text-sm font-medium text-gray-900">Pantorrilla</label>
                                <input type="float" id="pantorrilla" value="{{ old('pantorrilla') }}"
                                    name="pantorrilla"
                                    class="inline-block bg-gray-50 border border-gray-300 text-gray-900  rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 font-bold text-sm">
                                @error('pantorrilla')
                                    <div>
                                        <small class="text-red-600">{{ $message }}</small>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="observaciones"
                                class="block mb-2 text-sm font-medium text-gray-900">Observaciones</label>
                            <textarea type="text" rows="4" id="observaciones" name="observaciones"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 font-bold font-mono">{{ old('observaciones') }}</textarea>
                        </div>


                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="tallasModal" type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Guardar</button>
                            <button data-modal-hide="tallasModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Cancelar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>



    <script>
        function previewImage(event, querySelector) {

            //Recuperamos el input que desencadeno la acción
            const input = event.target;

            //Recuperamos la etiqueta img donde cargaremos la imagen
            $imgPreview = document.querySelector(querySelector);

            // Verificamos si existe una imagen seleccionada
            if (!input.files.length) return

            //Recuperamos el archivo subido
            file = input.files[0];

            //Creamos la url
            objectURL = URL.createObjectURL(file);

            //Modificamos el atributo src de la etiqueta img
            $imgPreview.src = objectURL;

        }
    </script>


</x-admin-layout>
