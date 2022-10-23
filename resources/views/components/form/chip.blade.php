@php
if(!isset($title)){
    $title= 'not found!';
}
if(!isset($bgcolor)){
    $bgcolor= trans('theme.chipbgcolor');
}
if(isset($img)){
    $img= '<img class="h-9 w-9 max-w-none rounded-full" alt="loading" src="'.$img.'" /> ';
}else{
    $img='';
}
@endphp
<div x-data {{ $attributes->class(["flex w-fit cursor-pointer rounded-full bg-".$bgcolor."-200 text-".$bgcolor."-500 hover:text-".$bgcolor."-800"])->merge() }}>
    {!! $img !!}
    <span class="flex items-center text-sm font-semibold px-3 py-2 truncate">{{ $slot }}{{ $title }}</span>
    <button class="hover bg-transparent focus:outline-none" @click="$el.parentNode.remove()">
        <svg class="mr-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
            {!! __('theme.closeSvgPath') !!}
        </svg>
    </button>
</div>