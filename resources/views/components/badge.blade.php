@php
if(!isset($nvalue)){
    $nvalue = '';
}
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<div class="flex justify-center space-x-2" {{ $attributes->merge() }}>
    <button type="button" class="relative items-center rounded bg-{{ $bgcolor }}-600 px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-{{ $bgcolor }}-600 hover:shadow-lg focus:bg-{{ $bgcolor }}-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-{{ $bgcolor }}-800 active:shadow-lg">
        {{ $slot }}
        <span class="absolute top-0 right-0 -mt-2 -mr-2 flex h-6 w-6 rounded-lg bg-red-700">
            <span class="absolute top-0 right-0 left-0 bottom-0 animate-ping rounded-lg bg-red-600 opacity-75"></span>
            <span class="px-1 py-1 align-baseline font-bold">{{ $nvalue }}</span>
        </span>
    </button>
</div>
