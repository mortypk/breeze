@php
if(!isset($nvalue)){
    $nvalue = '';
}
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($badgecolor)){
    $badgecolor= 'red';
}
@endphp
<div class="flex justify-center space-x-1" {{ $attributes->merge() }}>
    <x-button bgcolor="{{ $bgcolor }}" class="mr-1">
        {{ $slot }}
        <span class="absolute text-sm top-0 right-0 -mt-2 -mr-3 flex rounded-full ring-2 ring-{{ $badgecolor }}-50 bg-{{ $badgecolor }}-700">
            <span class="absolute top-1 right-1 left-1 bottom-1 animate-ping rounded-lg bg-{{ $badgecolor }}-600 opacity-75"></span>
            <span class="px-1 py-1 align-baseline font-bold w-[3ch]">{{ $nvalue }}</span>
        </span>
    </x-button>
</div>
