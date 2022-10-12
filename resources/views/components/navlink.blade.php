@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($href)){
    $href= '#';
}
@endphp
<a href="{{ $href }}" {{ $attributes->class(["hover:border-y-1 flex border-y-2 border-y-gray-50 p-3 hover:border-b-".$bgcolor."-300 hover:bg-gray-100 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 active:border-b-".$bgcolor."-600 active:shadow-inner active:shadow-gray-300"])->merge() }}>
    <div>
        @isset($iconpath)
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="currentColor" class="h-6 w-6">
            {!! $iconpath !!}
        </svg>
        @endisset
    </div>
    <div class="pl-1">{{ $slot }}</div>
</a>