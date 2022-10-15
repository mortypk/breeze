@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<select {{ $attributes->class(["block w-full min-w-0 flex-1 rounded-none border border-gray-300 bg-white text-base first:rounded-l-md p-2 last:rounded-r-md"])->merge() }}>
    {{ $slot }}
</select>