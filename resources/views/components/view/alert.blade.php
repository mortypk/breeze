@php
if (isset($type)) {
    $svgpath = trans('theme.' . $type . 'SvgPath');
} else {
    $type = 'info';
    $svgpath = trans('theme.' . $type . 'SvgPath');
}
$bgcolor = trans('theme.' . $type . 'bgcolor');
if (!isset($title)) {
    $title = '';
}
@endphp
<div x-data class="relative mb-1 shadow " {{ $attributes->merge() }}>
    <!-- {{ $type }} Alert box start -->
    <div class="flex ">
        <div class="w-16 bg-{{ $bgcolor }}-200">
            <div class="flex h-full items-center relative overflow-hidden">
                <svg width="92" height="92"
                    class="absolute m-auto fill-current text-{{ $bgcolor }}-300 hover:text-{{ $bgcolor }}-600"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    {!! $svgpath !!}
                </svg>
            </div>
        </div>
        <div class="w-full border-r-4 border-{{ $bgcolor }}-400 bg-white p-4">
            <p class="font-bold text-{{ $bgcolor }}-900"> {{ $title }} </p>
            <p class="text-sm text-gray-600">{{ $slot }} </p>
        </div>
    </div>
    <button @click="$el.parentNode.remove()"
        class="absolute right-0 top-1 mr-2 bg-transparent text-3xl font-bold text-gray-400 hover:text-gray-700">
        <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
            {!! __('theme.closeSvgPath') !!}
        </svg>
    </button>
    <!-- {{ $type }} Alert box End-->
</div>
