<x-admin-layout>
    
    <div class="shadow-md sm:rounded-lg grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4 h-64 sm:h-40  ">
        <div class="bg-blue-200">
            Titulo
        </div>
        <div class="bg-slate-300 sm:col-span-2 lg:col-span-3">
            <h1 class="font-bold font-sans text-5xl m-2">{{$atleta->primer_nombre}} <span class="text-3xl text-gray-600">{{$atleta->segundo_nombre}}</span> </h1>
            <h2 class="font-bold font-sans text-4xl ml-2 mb-3">{{$atleta->primer_apellido}} <span class="text-3xl text-gray-600">{{$atleta->segundo_apellido}}</span></h2>
            <span class="bg-green-100 text-green-800 text-lg font-medium mx-4 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">{{$atleta->categoria->nombre}}</span>
        </div>  
        
            <label>No. Documento: <span>{{$atleta->documento}}</span></label>
             
    </div>

</x-admin-layout>
