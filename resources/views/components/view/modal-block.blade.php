@php
if(!isset($modalID)){
    $modalID= 'showModal';
}
@endphp
<div x-data="{ '{{ $modalID }}': false }" @keydown.escape="{{ $modalID }} = false">
    {{ $slot }}
</div>