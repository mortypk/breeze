@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<select {{ $attributes->class(["block w-full min-w-0 flex-1 rounded-none border border-gray-300 bg-white focus:outline outline-2 outline-". $bgcolor."-400 text-base first:rounded-l-md p-2 last:rounded-r-md"])->merge() }}>
    {{ $slot }}
</select>