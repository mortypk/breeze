@php
if(!isset($bgcolor)){
    $bgcolor= 'gray-50';
}
if(isset($gap)){
    $gap='gap-'.$gap;
}else{
    $gap='gap-1';
}
@endphp
<div {{ $attributes->class(["mx-auto flex flex-wrap bg-".$bgcolor." ".$gap])->merge() }}>
{{ $slot }}
</div>