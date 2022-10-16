@php
    $title = 'flex overflow x';
@endphp
<div {{ $attributes->class(["mx-auto max-w-full flex overflow-x-auto overflow-y-hidden gap-1"])->merge() }}>
    {{ $slot }}
</div>