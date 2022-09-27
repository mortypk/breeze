<x-app-layout>
    <x-slot name="header">
        <div class="text-xl px-2 py-1 font-bold border-l-8 border-l-blue-200 truncate">
            {{ __('captions.dashboard') }}
        </div>
    </x-slot>
    <div class="text-base px-2 py-1 font-normal ">
        You're logged in!
        @include('layouts.icons')
    </div>
    <x-slot name="footer">
        <div class="text-base px-2 py-1 font-normal border-l-8 rounded-b-lg border-blue-200 truncate">
            {{ __('captions.status') }}
        </div>
    </x-slot>
</x-app-layout>