@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<div class="text-base px-2 py-1 font-sm border-l-8 rounded-b-lg border-{{ $bgcolor }}-200 truncate shadow-md">
    {{ $slot }}
</div>
