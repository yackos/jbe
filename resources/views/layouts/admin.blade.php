<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/45061e6a82.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">
    <x-banner />
    @php
        $links = [
            [
                'title' => 'Inicio',
                'url' => route('dashboard'),
                'active' => request()->routeIs('dashboard'),
                'icon' => 'fa-solid fa-gauge-high',
            ],
            [
                'title' => 'Atletas',
                'url' => route('atletas.index'),
                'active' => request()->routeIs('atletas.*'),
                'icon' => 'fa-solid fa-person-running',
            ],

            [
                'title' => 'Categorias',
                'url' => route('categorias.index'),
                'active' => request()->routeIs('categorias.*'),
                'icon' => 'fa-regular fa-futbol',
            ],
        ];
    @endphp

    <div class="flex" x-data="{ open: false, openSidebar: true }">
        <div :class="{ 'lg:block': openSidebar, }" class="w-64 flex-shrink-0 hidden lg:block" >
            <aside id="default-sidebar" class="fixed sticky top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 shadow" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
                    <h2 class="text-3xl font-semibold mb-7 text-blue-950">Academia JBE</h2>
                    <ul class="space-y-2 font-medium">
                        @foreach ($links as $link)
                            <li>
                                <a href="{{$link['url']}}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-300 {{$link['active'] ? 'bg-gray-300' : ''}}">
                                   
                                    <span class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900">
                                        <i class="{{$link['icon']}}"></i>
                                    </span>
                                    <span class="ml-3">{{$link['title']}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
        <div class="flex-1">
            <nav class="sticky top-0 bg-white border-b border-gray-100 z-50">
                <!-- Primary Navigation Menu -->
                <div class="mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">

                        <div class="-mr-2 lg:flex items-center hidden">
                            <button @click="openSidebar = ! openSidebar"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>

                        <div class="flex lg:hidden">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                {{-- <a href="{{ route('dashboard') }}">
                                    <x-application-mark class="block h-9 w-auto" />
                                </a> --}}
                            </div>
                        </div>

                        <div class="hidden lg:flex sm:items-center sm:ml-6">

                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button
                                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover"
                                                    src="{{ Auth::user()->profile_photo_url }}"
                                                    alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                            <span class="inline-flex rounded-md">
                                                <button type="button"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                    {{ Auth::user()->name }}

                                                    <svg class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Account') }}
                                        </div>

                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <div class="border-t border-gray-200"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <x-dropdown-link href="{{ route('logout') }}"
                                                @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center lg:hidden">
                            <button @click="open = ! open"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        @foreach ($links as $link)
                            <x-responsive-nav-link href="{{ $link['url'] }}" :active="$link['active']">
                                {{ $link['title'] }}
                            </x-responsive-nav-link>
                        @endforeach
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="shrink-0 mr-3">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </div>
                            @endif

                            <div>
                                <div class="font-medium text-base text-gray-800">
                                    {{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <!-- Account Management -->
                            <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                    {{ __('API Tokens') }}
                                </x-responsive-nav-link>
                            @endif

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            
            <div class="py-5 px-2 sm:px-4 lg:px-8 w-full">
                {{$slot}}
            </div>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
