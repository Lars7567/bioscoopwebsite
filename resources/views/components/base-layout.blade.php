

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Mijn Website')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Tailwind & App styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="antialiased font-sans bg-white text-black min-h-screen flex flex-col">

    <!-- Header -->
    <header class="bg-gray-100 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Mijn Website</h1>
            <nav class="space-x-8">
                <a href="/" class="text-sm hover:underline">Home</a>
                <a href="/about" class="text-sm hover:underline">Over</a>
                <a href="/films" class="text-sm hover:underline">Films</a>
                <a href="/contact" class="text-sm hover:underline">Contact</a>
                <a href="/register" class="text-sm hover:underline">Registreren</a>
                <a href="/login" class="text-sm hover:underline">Inloggen</a>
            </nav>
        </div>
    </header>

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
