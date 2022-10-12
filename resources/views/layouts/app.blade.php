<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite( 'resources/js/app.js')
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="max-w-7xl mx-auto mt-1 bg-white">
                {{ $header }}
            </header>

            <!-- Page Content -->
            <main class="max-w-7xl mx-auto mt-1 bg-white">
                {{ $slot }}
            </main>

            <!-- Page Footer -->
            <footer class="max-w-7xl mx-auto mt-1 bg-white">
                {{ $footer }}
            </footer>
        </div>
    </body>
</html>
