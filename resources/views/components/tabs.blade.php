@php
    if(!isset($show)){
        $show="t1";
    }else{
        $show= 't'.$show;
    }
@endphp
<div x-data="{ open: '{{ $show }}' }" class="shadow-lg rounded-b-lg bg-white p-1">
    <ul class="-mb-px flex flex-wrap border-b border-gray-200 text-center text-sm font-medium" >
        {{ $tabLinks }}
    </ul>
    <div class="p-1">
        {{ $slot }}
    </div>
</div>