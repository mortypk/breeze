<x-app-layout>
    <x-slot name="header">
        <x-headbar>
            {{ __('captions.dashboard') }}
        </x-headbar>
    </x-slot>
    <div class="text-base px-2 py-1 font-normal ">
        You're logged in!
        @include('layouts.icons')
    </div>
    <x-slot name="footer">
        <x-statusbar>
            {{ __('captions.status') }}
        </x-statusbar>
    </x-slot>
</x-app-layout>