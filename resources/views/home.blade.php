<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/tailwindcss.js') }}"></script>
    <!-- Alpine Core -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
    <main class="flex-row h-screen w-full min-w-full bg-gray-100">
        <div class="mx-auto max-w-7xl">
            @include('layouts.header')
            <x-layout.titlebar class="bg-white mt-1">
                @yield('title')
            </x-layout.titlebar>
            <x-layout.body>
                @yield('body')
            </x-layout.body>
            @include('layouts.footer')
            {{-- float message --}}
            <div class="absolute bottom-1 right-1">
                <x-view.toast type="warning" class="hideMe">
                    <x-slot name='title'>Error</x-slot>
                    Warning Message will hide 5s
                </x-view.toast>
            </div>
        </div>
    </main>
</body>
</html>