@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<div {{ $attributes->class(["text-xl px-2 py-1 font-bold border-l-8 border-l-".$bgcolor."-200 truncate"])->merge() }}>
    {{ $slot }}
</div>
