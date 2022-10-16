@php
    if(!isset($ntab)){
        $ntab= 't';
    }else{
        $ntab= 't'.$ntab;
    }
    if(!isset($bgcolor)){
        $bgcolor= trans('theme.bgcolor');
    }
@endphp
<div x-show="open === '{{ $ntab }}'" >
    {{ $slot }}
</div>