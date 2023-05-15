<div>
    <div class="fixed top-14 left-0 z-20 w-full h-16 bg-gray-100 border-t border-gray-300">
        <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
            <a href="{{route('atletas.edit', $atleta)}}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                </svg>
                <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600">Editar</span>
            </a>
            <a href="{{route('tallas.index', $atleta)}}" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" stroke-width="1.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
                </svg>
                <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600">Tallas</span>
            </a>
            <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor" viewBox="0 0 22 22" aria-hidden="true">
                    <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"></path>
                </svg>
                <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600">Salud</span>
            </a>
            <a href="#" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                <svg class="w-6 h-6 mb-1 text-gray-500 group-hover:text-blue-600" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"></path>
                </svg>
                <span class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600">Indices</span>
            </a>
        </div>
    </div>
</div>
