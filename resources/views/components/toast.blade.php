@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($title)){
    $title= '';
}
if(!isset($mtime)){
    $mtime= '0 min ago';
}
if(isset($type)){
    $svgpath=trans('theme.'.$type.'SvgPath');
}else{
    $type='info';
    $svgpath=trans('theme.'.$type.'SvgPath');
}
@endphp
<div x-data x-ref="toast" class="pointer-events-auto mx-auto mb-3 block w-full rounded-lg bg-clip-padding text-sm shadow-lg" {{ $attributes->merge() }}>
    <div class="flex items-center justify-between rounded-t-lg border-b border-{{ $bgcolor }}-500 bg-{{ $bgcolor }}-600 bg-clip-padding py-2 px-3">
        <p class="flex items-center font-bold text-white">
            <svg aria-hidden="true" focusable="false" class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                {!! $svgpath !!}
            </svg>
            {{ $title }}
        </p>
        <div class="flex items-center">
            <p class="text-xs text-white opacity-90">{{ $mtime }}</p>
            <button class="bg-transparent text-gray-200 hover:text-gray-700" @click="$refs.toast.remove()">
                <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                    {!! __('theme.closeSvgPath') !!}
                </svg>
            </button>
        </div>
    </div>
    <div class="break-words rounded-b-lg bg-white p-3 text-black">{{ $slot }}</div>
</div>
