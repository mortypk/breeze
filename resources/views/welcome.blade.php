<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/tailwindcss.js') }}"></script>
        <!-- Alpine Plugins -->
        <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
        <!-- Alpine Core -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
        <div class="relative justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-7xl mx-auto sm:px-1">
                <x-navbar>
                    <x-nav-logo>
                        <div>M</div>
                        <div class="pl-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="h-5 w-5">
                            <path d="M0 160v96C0 379.7 100.3 480 224 480s224-100.3 224-224V160H320v96c0 53-43 96-96 96s-96-43-96-96V160H0zm0-32H128V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v64zm320 0H448V64c0-17.7-14.3-32-32-32H352c-17.7 0-32 14.3-32 32v64z" />
                            </svg>
                        </div>
                        <div>NSHI</div>
                    </x-nav-logo>
                    <x-navlink>Home</x-navlink>
                    <x-navdropdown>
                        <x-dropdownlink>One</x-dropdownlink>
                        <x-dropdownlink>Two</x-dropdownlink>
                        <x-dropdownlink>Three</x-dropdownlink>
                    </x-navdropdown>
                    <x-navdropdown>
                        <x-dropdownlink>One</x-dropdownlink>
                        <x-dropdownlink>Two</x-dropdownlink>
                        <x-dropdownlink>Three</x-dropdownlink>
                    </x-navdropdown>
                    <div class="flex-grow"></div>
                    @if (Route::has('login'))
                            @auth
                            <x-navlink href="{{ url('/dashboard') }}">Dashboard</x-navlink>
                            @else
                                <x-navlink href="{{ route('login') }}">Log in</x-navlink>
                                @if (Route::has('register'))
                                    <x-navlink href="{{ route('register') }}">Register</x-navlink>
                                @endif
                            @endauth
                    @endif
                </x-navbar>
                <span class="m-1"></span>
                <x-alert type='info'><x-slot name="title">Alert</x-slot> Please beinform</x-alert>
                <x-alert type='warning'><x-slot name="title">Alert</x-slot> Please beinform</x-alert>
                <x-alert type='danger'><x-slot name="title">Alert</x-slot> Please beinform</x-alert>
                <x-alert type='success'><x-slot name="title">Alert</x-slot> Please beinform</x-alert>
                <x-badge nvalue="10">Warnings</x-badge>
                <x-headbar>
                    {{ __('captions.dashboard') }}
                </x-headbar>
                <x-superbadge nvalue="70">Notification</x-superbadge>
                @include('layouts.icons')
                <x-statusbar>
                    {{ __('captions.status') }}
                    @php
                    echo trans('auth.failed');
                    @endphp
                </x-statusbar>
                <div class="p-3">
                    <x-progressbar percent='95' bgcolor='yellow' class="h-[20px]">Complete</x-progressbar>
                    <x-progressbar bgcolor="red" percent="15" >half round corner</x-progressbar>
                    <x-progressbar bgcolor="indigo" percent="15" >full round corner</x-progressbar>
                </div>
                <x-toast type='info'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-toast>
                <x-toast type='danger'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-toast>
                <x-toast type='success'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-toast>
                <x-toast type='warning'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-toast>
                <x-flexoverx class="p-1">
                    @for ($i=1; $i < 9; $i++) 
                    <x-slot>
                        <x-chip img="https://i.pravatar.cc/48?img={{ $i }}">Hello world! {{ $i }}</x-chip>
                    </x-slot>
                    @endfor
                </x-flexoverx>
                <x-flexoverx class="pt-3 gap-2">
                    @for ($i=1; $i < 19; $i++) 
                    <x-badge nvalue="{{ $i }}">Notification</x-badge>
                    @endfor
                </x-flexoverx>
                <x-tabs show='2'>
                    <x-slot name="tabLinks">
                        @for ($i=1; $i < 5; $i++) 
                        <x-tabs-link ntab='{{ $i }}'>Dashboard {{ $i }}</x-tab-link>
                        @endfor
                    </x-slot>
                    @for ($i=1; $i < 5; $i++) 
                    <x-tabs-contents ntab='{{ $i }}'>
                        {{ $i }} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui dolores temporibus esse doloribus? Voluptates, molestiae iusto dolores corporis debitis veritatis tenetur culpa rerum maxime perferendis assumenda dignissimos voluptas magnam mollitia!
                    </x-tabs-contents>
                    @endfor
                </x-tabs>
                <div x-data="{ modal: 'none' }">
                    <x-flexoverx class="pt-3 gap-2">
                        @for ($i=1; $i < 9; $i++) 
                        @php
                            $tempID = "m".$i;
                        @endphp
                            <x-modal modalID="{{ $tempID }}" btnCancel >
                                <x-slot name="title">Modal Information</x-slot>
                                <x-slot name="body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sapiente at nulla nam pariatur obcaecati corporis, sint beatae, recusandae nemo nobis dolorem eligendi ipsum, iure minus? Sunt reprehenderit aliquid nisi.
                                </x-slot>
                                <x-slot name="footer">
                                    <x-button>OK</x-button>
                                </x-slot>
                            </x-modal>
                            <x-button @click="modal ='{{ $tempID }}';focusInput('{{ $tempID }}close'); " bgcolor="green"  >Modal {{ $i }}</x-button>
                        @endfor
                    </x-flexoverx>
                </div>
            </div>
        </div>
        <script>
            function focusInput(e) {
                document.getElementById(e).focus();
            }
        </script>
    </body>
</html>
