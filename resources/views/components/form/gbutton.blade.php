@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<button {{ $attributes->class(["inline-flex px-4 py-2 text-white transition-colors duration-300 transform 
rounded-none border-y border-".$bgcolor."-700
bg-".$bgcolor."-600 hover:bg-".$bgcolor."-500 
focus:outline-none focus:ring focus:ring-".$bgcolor."-300 focus:ring-opacity-80 
first:border-l first:rounded-l-md 
last:border-r last:rounded-r-md"])->merge() }}>
    {{ $slot }}
</button>