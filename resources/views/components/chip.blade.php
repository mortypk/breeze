@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.chipbgcolor');
}
if(isset($img)){
    $img= '<img class="h-9 w-9 max-w-none rounded-full" alt="loading" src="'.$img.'" /> ';
}else{
    $img='';
}
@endphp

<span x-data {{ $attributes->class(["align-center ease flex w-max cursor-pointer rounded-full bg-".$bgcolor."-200 text-sm font-semibold text-".$bgcolor."-500 transition duration-300 hover:text-".$bgcolor."-800"])->merge() }}>
    @php
        echo $img;
    @endphp
    <span class="flex items-center px-3 py-2">{{ $slot }}</span>
    <button class="hover bg-transparent focus:outline-none" @click="$el.parentNode.remove()">
        <svg class="mr-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
            {{!! __('theme.closeSvgPath') !!}}
        </svg>
    </button>
</span>