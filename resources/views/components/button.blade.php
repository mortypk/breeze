@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<button {{ $attributes->class(["px-4 py-1 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-".$bgcolor."-600 rounded-md hover:bg-".$bgcolor."-500 focus:outline-none focus:ring focus:ring-".$bgcolor."-300 focus:ring-opacity-80"])->merge() }}>
    {{ $slot }}
</button>