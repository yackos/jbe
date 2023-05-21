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
                    {{ $atleta->edad }} años | {{ $atleta->categoria->nombre }}
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
                            <a href="" class="block md:inline-block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-4 py-2 mr-2 mb-2">Ver Indices</a>
                            <a href="" class="block md:inline-block focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-xs px-4 py-2 mr-2 mb-2">Ver Phantoms</a>
                            <a href="" class="block md:inline-block focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-4 py-2 mr-2 mb-2">Eliminar</a>
                            {{-- <button data-modal-target="indicesModal" data-modal-toggle="indicesModal" class="px-3 py-2 text-xs font-medium text-center text-white bg-amber-700 rounded-lg hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Ver Indices y Phantoms</button> --}}
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

                        <h2 class="text-center font-semibold bg-gray-800 text-white">INDICES</h2>
                        <div class="grid gap-2 mb-6 grid-cols-2 md:grid-cols-4 mt-3 justify-items-center">                            
                            <div>
                                <label for="s6pl" class="block mb-2 text-xs font-medium text-gray-900 text-center">S6PL</label>
                                <input type="float" id="s6pl" value="{{ number_format($s6pl, 2, ',') }}" name="s6pl" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center" disabled>
                            </div>
                            <div>
                                <label for="imc" class="block mb-2 text-xs font-medium text-gray-900 text-center">IMC</label>
                                <input type="float" id="imc" value="{{ number_format($imc, 2, ',') }}" name="imc" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center" disabled>
                            </div>
                            <div>
                                <label for="s3pl" class="block mb-2 text-xs font-medium text-gray-900 text-center">S3PL</label>
                                <input type="float" id="s3pl" value="{{ number_format($s3pl, 2, ',') }}" name="s3pl" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center" disabled>
                            </div>
                            <div>
                                <label for="hwr" class="block mb-2 text-xs font-medium text-gray-900 text-center">HWR</label>
                                <input type="float" id="hwr" value="{{ number_format($hwr, 2, ',') }}" name="hwr" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center" disabled>
                            </div>
                        </div>

                        <h2 class="text-center font-semibold bg-orange-800 text-white">SOMATOTIPO</h2>
                        <div class="grid gap-2 mb-6 grid-cols-3 md:grid-cols-5 mt-3 justify-items-center">                            
                            <div>
                                <label for="s6pl" class="block mb-2 text-xs font-medium text-gray-900 text-center">ENDOMORFO</label>
                                <input type="float" id="s6pl" value="{{ number_format($endo, 2, ',') }}" name="s6pl" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="imc" class="block mb-2 text-xs font-medium text-gray-900 text-center">MESOMORFO</label>
                                <input type="float" id="imc" value="{{ number_format($meso, 2, ',') }}" name="imc" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="s3pl" class="block mb-2 text-xs font-medium text-gray-900 text-center">ECTOMORFO</label>
                                <input type="float" id="s3pl" value="{{ number_format($ecto, 2, ',') }}" name="s3pl" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="hwr" class="block mb-2 text-xs font-medium text-gray-900 text-center">COORDENADA X</label>
                                <input type="float" id="hwr" value="{{ number_format($coord_x, 2, ',') }}" name="hwr" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="hwr" class="block mb-2 text-xs font-medium text-gray-900 text-center">COORDENADA Y</label>
                                <input type="float" id="hwr" value="{{ number_format($coord_y, 2, ',') }}" name="hwr" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                        </div>

                        <h2 class="text-center font-semibold bg-indigo-800 text-white">PHANTOM</h2>
                        <div class="grid gap-2 mb-6 grid-cols-2 mt-3 justify-items-center">                            
                            <div>
                                <label for="masa_corp" class="block mb-2 text-xs font-medium text-gray-900 text-center">MASA CORPORAL</label>
                                <input type="float" id="masa_corp" value="{{ number_format($masa_corp, 2, ',') }}" name="masa_corp" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="talla_sen" class="block mb-2 text-xs font-medium text-gray-900 text-center">TALLA SENTADO</label>
                                <input type="float" id="talla_sen" value="{{ number_format($talla_sen, 2, ',') }}" name="talla_sen" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                        </div>
                        <h2 class="text-center font-semibold bg-indigo-600 text-white">SCORE-Z DIAMETROS</h2>
                        <div class="grid gap-2 mb-6 grid-cols-3 md:grid-cols-6 mt-3 justify-items-center">                            
                            <div>
                                <label for="biacromial" class="block mb-2 text-xs font-medium text-gray-900 text-center">BIACROMIAL</label>
                                <input type="float" id="biacromial" value="{{ number_format($biacromial, 2, ',') }}" name="biacromial" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="torax_tran" class="block mb-2 text-xs font-medium text-gray-900 text-center">TORAX TRANSVERSO</label>
                                <input type="float" id="torax_tran" value="{{ number_format($torax_tran, 2, ',') }}" name="torax_tran" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="torax_ant" class="block mb-2 text-xs font-medium text-gray-900 text-center">TORAX ANTEROPOST</label>
                                <input type="float" id="torax_ant" value="{{ number_format($torax_ant, 2, ',') }}" name="torax_ant" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="bi_lio" class="block mb-2 text-xs font-medium text-gray-900 text-center">BI-LIOCRESTIDEO</label>
                                <input type="float" id="bi_lio" value="{{ number_format($bi_lio, 2, ',') }}" name="bi_lio" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="humeral" class="block mb-2 text-xs font-medium text-gray-900 text-center">HUMERAL</label>
                                <input type="float" id="humeral" value="{{ number_format($humeral, 2, ',') }}" name="humeral" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="femoral" class="block mb-2 text-xs font-medium text-gray-900 text-center">FEMORAL</label>
                                <input type="float" id="femoral" value="{{ number_format($femoral, 2, ',') }}" name="femoral" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                        </div>

                        <h2 class="text-center font-semibold bg-indigo-600 text-white">SCORE-Z PERIMETROS</h2>
                        <div class="grid gap-2 mb-6 grid-cols-2 md:grid-cols-5 mt-3 justify-items-center">                            
                            <div>
                                <label for="cabeza" class="block mb-2 text-xs font-medium text-gray-900 text-center">CABEZA</label>
                                <input type="float" id="cabeza" value="{{ number_format($cabeza, 2, ',') }}" name="cabeza" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="brazo_rel" class="block mb-2 text-xs font-medium text-gray-900 text-center">BRAZO RELAJADO</label>
                                <input type="float" id="brazo_rel" value="{{ number_format($brazo_rel, 2, ',') }}" name="brazo_rel" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="brazo_flex" class="block mb-2 text-xs font-medium text-gray-900 text-center">BRAZO FLEXIONADO</label>
                                <input type="float" id="brazo_flex" value="{{ number_format($brazo_flex, 2, ',') }}" name="brazo_flex" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="antebrazo" class="block mb-2 text-xs font-medium text-gray-900 text-center">ANTEBRAZO</label>
                                <input type="float" id="antebrazo" value="{{ number_format($antebrazo, 2, ',') }}" name="antebrazo" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="torax" class="block mb-2 text-xs font-medium text-gray-900 text-center">TORAX MESOEXTERNAL</label>
                                <input type="torax" id="humeral" value="{{ number_format($torax, 2, ',') }}" name="torax" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="cintura" class="block mb-2 text-xs font-medium text-gray-900 text-center">CINTURA</label>
                                <input type="float" id="cintura" value="{{ number_format($cintura, 2, ',') }}" name="cintura" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="cadera_max" class="block mb-2 text-xs font-medium text-gray-900 text-center">CADERA MAXIMA</label>
                                <input type="float" id="cadera_max" value="{{ number_format($cadera_max, 2, ',') }}" name="cadera_max" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="muslo_max" class="block mb-2 text-xs font-medium text-gray-900 text-center">MUSLO MAXIMO</label>
                                <input type="float" id="muslo_max" value="{{ number_format($muslo_max, 2, ',') }}" name="muslo_max" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="muslo_med" class="block mb-2 text-xs font-medium text-gray-900 text-center">MUSLO MEDIO</label>
                                <input type="float" id="muslo_med" value="{{ number_format($muslo_med, 2, ',') }}" name="muslo_med" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="pantorrilla_max" class="block mb-2 text-xs font-medium text-gray-900 text-center">PANTORRILLA MAXIMA</label>
                                <input type="float" id="pantorrilla_max" value="{{ number_format($pantorrilla_max, 2, ',') }}" name="pantorrilla_max" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                        </div>

                        <h2 class="text-center font-semibold bg-indigo-600 text-white">SCORE-Z PLIEGUES</h2>
                        <div class="grid gap-2 mb-6 grid-cols-3 md:grid-cols-6 mt-3 justify-items-center">                            
                            <div>
                                <label for="triceps" class="block mb-2 text-xs font-medium text-gray-900 text-center">TRICEPS</label>
                                <input type="float" id="triceps" value="{{ number_format($triceps, 2, ',') }}" name="triceps" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="subescapular" class="block mb-2 text-xs font-medium text-gray-900 text-center">SUBESCAPULAR</label>
                                <input type="float" id="subescapular" value="{{ number_format($subescapular, 2, ',') }}" name="torax_tran" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="supraespinal" class="block mb-2 text-xs font-medium text-gray-900 text-center">SUPRAESPINAL</label>
                                <input type="float" id="supraespinal" value="{{ number_format($supraespinal, 2, ',') }}" name="supraespinal" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="abdominal" class="block mb-2 text-xs font-medium text-gray-900 text-center">ABDOMINAL</label>
                                <input type="float" id="abdominal" value="{{ number_format($abdominal, 2, ',') }}" name="abdominal" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="pmuslo_med" class="block mb-2 text-xs font-medium text-gray-900 text-center">MUSLO MEDIO</label>
                                <input type="float" id="pmuslo_med" value="{{ number_format($pmuslo_med, 2, ',') }}" name="pmuslo_med" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                            <div>
                                <label for="pantorrilla" class="block mb-2 text-xs font-medium text-gray-900 text-center">PANTORRILLA</label>
                                <input type="float" id="pantorrilla" value="{{ number_format($pantorrilla, 2, ',') }}" name="femoral" class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2 text-center w-full" disabled>
                            </div>
                        </div>
                         <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="indicesModal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                Guardar
                            </button>
                            <button data-modal-hide="indicesModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                Cancelar
                            </button>
                        </div> 
                     </form>
                </div>
            </div>
        </div>
    </div>


</x-admin-layout>
