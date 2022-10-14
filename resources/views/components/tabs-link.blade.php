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
<li @click="open ='{{ $ntab }}'" class="inline-block cursor-pointer hover:border-y-1 border-y-2 border-y-gray-50 p-3 hover:border-b-{{ $bgcolor }}-300 hover:bg-gray-100 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 active:border-b-{ $bgcolor }}-600 active:shadow-inner active:shadow-gray-300" x-bind:class="{'border-b-{{ $bgcolor }}-600 bg-gray-100 shadow-inner' : open == '{{ $ntab }}'}">
    {{ $slot }}
</li>