@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($id)){
    $id= 'radio'.microtime();
}
@endphp
<div class="inline-flex px-2 rounded-none border-y 
    border-gray-300 bg-white text-gray-900
    border-r 
    first:border-l first:rounded-l-md 
    p-2" >
    <input  id="{{ $id }}" type="radio" {{ $attributes->class(["w-6 h-6 accent-".$bgcolor."-600"])->merge() }} />
</div>
<label for="{{ $id }}" class="inline-flex flex-1 px-2 rounded-none border-y 
cursor-pointer
border-gray-300 bg-gray-200 text-gray-900 
last:border-r last:rounded-r-md p-2" >
    {{ $slot }}    
</label>