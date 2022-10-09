@php
if(!isset($nvalue)){
    $nvalue = '';
}
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<div class="flex justify-center space-x-1" {{ $attributes->merge() }}>
    <x-button bgcolor="{{ $bgcolor }}" class="mr-1">
        {{ $slot }}
        <span class="absolute text-sm top-0 right-0 -mt-2 -mr-2 flex rounded-full bg-red-700">
            <span class="absolute top-0 right-0 left-0 bottom-0 animate-ping rounded-lg bg-red-600 opacity-75"></span>
            <span class="px-1 py-1 align-baseline font-bold w-[3ch]">{{ $nvalue }}</span>
        </span>
    </x-button>
</div>
