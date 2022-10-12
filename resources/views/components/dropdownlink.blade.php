@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<a href="#" class="block px-4 py-2 hover:bg-{{ $bgcolor }}-300 hover:text-black">
    {{ $slot }}
</a>