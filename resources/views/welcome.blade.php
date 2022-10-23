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
                <x-nav.bar>
                    <x-nav.logo>
                        <div>M</div>
                        <div class="pl-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="h-5 w-5">
                            <path d="M0 160v96C0 379.7 100.3 480 224 480s224-100.3 224-224V160H320v96c0 53-43 96-96 96s-96-43-96-96V160H0zm0-32H128V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v64zm320 0H448V64c0-17.7-14.3-32-32-32H352c-17.7 0-32 14.3-32 32v64z" />
                            </svg>
                        </div>
                        <div>NSHI</div>
                    </x-nav.logo>
                    <x-nav.link href="{{ route('home') }}">Home</x-nav.link>
                    <x-nav.dropdown>
                        <x-nav.dropdown-link>One</x-nav.dropdown-link>
                        <x-nav.dropdown-link>Two</x-nav.dropdown-link>
                        <x-nav.dropdown-link>Three</x-nav.dropdown-link>
                    </x-nav.dropdown>
                    <x-nav.dropdown>
                        <x-nav.dropdown-link>One</x-nav.dropdown-link>
                        <x-nav.dropdown-link>Two</x-nav.dropdown-link>
                        <x-nav.dropdown-link>Three</x-nav.dropdown-link>
                    </x-nav.dropdown>
                    <div class="flex-grow"></div>
                    @if (Route::has('login'))
                            @auth
                            <x-nav.link href="{{ url('/dashboard') }}">Dashboard</x-nav.link>
                            @else
                                <x-nav.link href="{{ route('login') }}">Log in</x-nav.link>
                                @if (Route::has('register'))
                                    <x-nav.link href="{{ route('register') }}">Register</x-nav.link>
                                @endif
                            @endauth
                    @endif
                </x-nav.bar>
                <span class="grid gap-y-1 my-1">
                    <x-form.group-input>
                            <x-form.label>Choose</x-form.label>    
                        <x-form.select>
                            <x-form.option>One</x-form-option>
                            <x-form.option selected>Two</x-form-option>
                        </x-form.select>
                        <x-form.spin bgcolor="red"></x-form.spin>
                    </x-form.group-input>
                    <x-form.group-input>
                        <x-form.input type="file"></x-form.input>
                    </x-form.group-input>
                    <x-form.group-input>
                        <x-form.checkbox id="nocheck" bgcolor="red">Accept the policy</x-form.checkbox>
                    </x-form.group-input>
                    <x-form.group-input>
                        <x-form.radio name="gender">male</x-form.radio>
                    </x-form.group-input>
                    <x-form.group-input>
                        <x-form.radio name="gender">female</x-form.radio>
                    </x-form.group-input>
                    <x-form.group-input>
                        <x-form.label>Name</x-form.label>
                        <x-form.input placeholder="first"></x-form.input>
                        <x-form.gbutton>OK</x-form.gbutton>
                    </x-form.group-input>
                    <x-form.group-input>
                    <x-form.label>Comments</x-form.label>
                    <x-form.textarea rows="5"></x-form.textarea>
                    </x-form.group-input>
                </span>
                <x-view.alert type='info'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
                <x-view.alert type='warning'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
                <x-view.alert type='danger'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
                <x-view.alert type='success'><x-slot name="title">Alert</x-slot> Please beinform</x-view.alert>
                <x-view.badge nvalue="10">Warnings</x-view.badge>
                <x-layout.headbar>
                    {{ __('captions.dashboard') }}
                </x-layout.headbar>
                <x-view.superbadge nvalue="70">Notification</x-view.superbadge>
                @include('layouts.icons')
                <x-layout.statusbar>
                    {{ __('captions.status') }}
                    @php
                    echo trans('auth.failed');
                    @endphp
                </x-layout.statusbar>
                <div class="p-3">
                    <x-view.progressbar percent='95' bgcolor='yellow' class="h-[20px]">Complete</x-view.progressbar>
                    <x-view.progressbar bgcolor="red" percent="15" class="rounded-full my-1" >half round corner</x-view.progressbar>
                    <x-view.progressbar bgcolor="indigo" percent="15" >full round corner</x-view.progressbar>
                </div>
                <x-view.toast type='info'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-view.toast>
                <x-view.toast type='danger'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-view.toast>
                <x-view.toast type='success'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-view.toast>
                <x-view.toast type='warning'>
                    <x-slot name='title'>Toast Heading</x-slot>
                    New Toast Message view
                </x-view.toast>
                <x-layout.flexoverx class="p-1">
                    @for ($i=1; $i < 9; $i++) 
                    <x-slot>
                        <x-form.chip img="https://i.pravatar.cc/48?img={{ $i }}">Hello world! {{ $i }}</x-form.chip>
                    </x-slot>
                    @endfor
                </x-layout.flexoverx>
                <x-layout.flexoverx class="pt-3 gap-2">
                    @for ($i=1; $i < 19; $i++) 
                    <x-view.badge nvalue="{{ $i }}">Notification</x-view.badge>
                    @endfor
                </x-layout.flexoverx>
                <x-view.tabs show='2'>
                    <x-slot name="tabLinks">
                        @for ($i=1; $i < 5; $i++) 
                        <x-view.tabs-link ntab='{{ $i }}'>Dashboard {{ $i }}</x-tab-link>
                        @endfor
                    </x-slot>
                    @for ($i=1; $i < 5; $i++) 
                    <x-view.tabs-contents ntab='{{ $i }}'>
                        {{ $i }} Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui dolores temporibus esse doloribus? Voluptates, molestiae iusto dolores corporis debitis veritatis tenetur culpa rerum maxime perferendis assumenda dignissimos voluptas magnam mollitia!
                    </x-view.tabs-contents>
                    @endfor
                </x-view.tabs>
                <div x-data="{ modal: 'none' }">
                    <x-layout.flexoverx class="pt-3 gap-2">
                        @for ($i=1; $i < 9; $i++) 
                        @php
                            $tempID = "m".$i;
                        @endphp
                            <x-view.modal modalID="{{ $tempID }}" btnCancel >
                                <x-slot name="title">Modal Information</x-slot>
                                <x-slot name="body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores sapiente at nulla nam pariatur obcaecati corporis, sint beatae, recusandae nemo nobis dolorem eligendi ipsum, iure minus? Sunt reprehenderit aliquid nisi.
                                </x-slot>
                                <x-slot name="footer">
                                    <x-form.button>OK</x-form.button>
                                </x-slot>
                            </x-view.modal>
                            <x-form.button @click="modal ='{{ $tempID }}';focusInput('{{ $tempID }}close'); " bgcolor="green"  >Modal {{ $i }}</x-form.button>
                        @endfor
                    </x-layout.flexoverx>
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
