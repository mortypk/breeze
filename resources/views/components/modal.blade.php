@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($title)){
    $title= '';
}
if(!isset($body)){
    $body= '';
}
if(!isset($footer)){
    $footer= '';
}
if(isset($type)){
    $svgpath=trans('theme.'.$type.'SvgPath');
}else{
    $type='info';
    $svgpath=trans('theme.'.$type.'SvgPath');
}
if(!isset($modalID)){
    $modalID= 'showModal';
}
@endphp
<!-- Model Mask -->  
<div x-show="modal === '{{ $modalID }}'"  x-ref="{{ $modalID }}" class="absolute z-50 inset-0 flex items-center justify-center bg-gray-200 bg-opacity-75 p-1" style="display: none;">
    <!-- Model Window -->
    <div class="pointer-events-auto mx-auto block h-[80vh] w-full max-w-4xl rounded-lg bg-clip-padding text-sm" @click.outside="modal = 'none'">
        <!-- Model Header -->
        <div class="flex items-center justify-between rounded-t-lg border-b border-blue-500 bg-blue-600 bg-clip-padding py-2 px-3">
            <div class="flex items-center font-bold text-white">
                <span class="mr-2 h-4 w-4">
                    <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M1 3v2h22V3a2.001 2.001 0 0 0-2-2H3a2.001 2.001 0 0 0-2 2Zm3 1a.987.987 0 0 1-.993-.992A1.001 1.001 0 0 1 4 2a1.013 1.013 0 0 1 1.006 1.008A.998.998 0 0 1 4 4Zm3 0a1 1 0 1 1 1-1a1.004 1.004 0 0 1-1 1ZM1 6v14a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V6Zm20 14H3V8h18Z" /></svg>
                </span>
                {{ $title }}
            </div>
            <div class="flex items-center">
                <button class="bg-transparent text-gray-200 hover:text-gray-700"  @click="modal = 'none'">
                <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                    {!! __('theme.closeSvgPath') !!}
                </svg>
                </button>
            </div>
        </div>
        <!-- Header End -->
        <!-- Model Body -->
        <div class="max-h-full overflow-auto break-words bg-white p-3 text-black">
            {{ $body }}
        </div>
        <!-- Body End -->
        <!-- Model Footer -->
        <div class="flex">
            <div class="flex h-10 w-full justify-end space-x-1 rounded-b-lg bg-gray-100 py-1 px-2 shadow-lg">
                @if (isset($btnCancel))
                <x-button id="{{ $modalID }}close"  @click="modal = 'none'" bgcolor="red" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center">
                    Cancel
                </x-button>
                @endif
                {{ $footer }}
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Model Window End -->
</div>
<!-- Mask End -->