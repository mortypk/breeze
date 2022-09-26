<x-app-layout>
    <x-slot name="header">
        <div class="mx-auto max-w-7xl bg-white shadow text-xl px-2 py-1 font-bold border-l-8 rounded-l-md border-blue-200 truncate">
            {{ __('captions.dashboard') }}
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto">
        <div class="mx-auto max-w-7xl bg-white shadow text-base px-2 py-1 font-normal border-l-8 rounded-l-md border-green-200 truncate">
                You're logged in!
                @include('layouts.icons')
        </div>
    </div>
    <x-slot name="footer">
        <div class="mx-auto max-w-7xl bg-white shadow text-base px-2 py-1 font-normal border-l-8 rounded-l-md border-yellow-200 truncate">
            {{ __('captions.status') }}
        </div>
    </x-slot>
</x-app-layout>