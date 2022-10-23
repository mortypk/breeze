@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp<textarea {{ $attributes->class(["block p-1 w-full min-w-0 flex-1 rounded-none border border-gray-300 bg-white text-base 
focus:outline outline-2 outline-". $bgcolor."-400
first:rounded-l-md last:rounded-r-md"])->merge() }}>{{ $slot }}</textarea>
