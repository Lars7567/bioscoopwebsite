<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'MovieTime Bioscoop')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind & App styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="antialiased font-sans bg-gray-50 text-black min-h-screen flex flex-col">

    <!-- Professionele Navbar -->
    <nav x-data="{ open: false }" class="bg-gradient-to-r from-blue-900 via-blue-700 to-blue-500 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden sm:flex items-center space-x-6">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-100 hover:text-white">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('films.index')" :active="request()->routeIs('films.index')" class="text-gray-100 hover:text-white">
                        {{ __('Films') }}
                    </x-nav-link>
                    <x-nav-link :href="route('filmzaal.index')" :active="request()->routeIs('filmzaal.index')" class="text-gray-100 hover:text-white">
                        {{ __('Film-Zaal') }}
                    </x-nav-link>
                    <x-nav-link :href="route('resevering.index')" :active="request()->routeIs('resevering.index')" class="text-gray-100 hover:text-white">
                        {{ __('Reserveringen') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')" class="text-gray-100 hover:text-white">
                        {{ __('Over ons') }}
                    </x-nav-link>
                    <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')" class="text-gray-100 hover:text-white">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
                <!-- Right Side -->
                <div class="hidden sm:flex items-center space-x-4">
                    @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-900 bg-gray-200 hover:text-black focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')" class="text-gray-500 hover:text-black">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-gray-900 hover:text-black">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    @endauth

                    @guest
                        <div class="space-x-4">
                            <a href="{{ route('login') }}" class="text-sm text-gray-100 hover:text-white">Login</a>
                        @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm text-gray-100 hover:text-white">Register</a>
                        @endif
                        </div>
                    @endguest
                </div>
                <!-- Hamburger -->
                <div class="sm:hidden flex items-center">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-100 hover:text-white hover:bg-blue-800 focus:outline-none transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Responsive Navigation -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-blue-900">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-100 hover:text-white">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('films.index')" :active="request()->routeIs('films.index')" class="text-gray-100 hover:text-white">
                    {{ __('Films') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('filmzaal.index')" :active="request()->routeIs('filmzaal.index')" class="text-gray-100 hover:text-white">
                    {{ __('Film-Zaal') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('resevering.index')" :active="request()->routeIs('resevering.index')" class="text-gray-100 hover:text-white">
                    {{ __('Reserveringen') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')" class="text-gray-100 hover:text-white">
                    {{ __('Over ons') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')" class="text-gray-100 hover:text-white">
                    {{ __('Contact') }}
                </x-responsive-nav-link>
            </div>
            @auth
            <div class="pt-4 pb-1 border-t border-gray-300">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-100">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-300">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" class="text-gray-100 hover:text-white">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-gray-100 hover:text-white">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
            @endauth
            @guest
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="mt-3 space-y-1 px-4">
                    <a href="{{ route('login') }}" class="block text-gray-100 hover:text-white">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block text-gray-100 hover:text-white">Register</a>
                    @endif
                </div>
            </div>
            @endguest
        </div>
    </nav>

    <!-- Main content -->
    <main class="flex-1">
        <div class="max-w-7xl mx-auto p-6">
         {{$slot}}
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-200 text-center text-sm py-4 shadow">
        &copy; {{ date('Y') }} Mijn Website. Alle rechten voorbehouden.
    </footer>

    @stack('scripts')
</body>
</html>
