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
    <x-button bgcolor="{{ $bgcolor }}" class="inline-flex items-center pl-2 pr-1 py-2 text-sm font-medium text-center">
        {{ $slot }}
        <span class="bg-{{ $badgecolor }}-700 text-{{ $badgecolor }}-100 text-xs font-semibold mx-1 px-1 py-0.5 rounded">
            {{ $nvalue }}
        </span>
    </x-button>
</div>
