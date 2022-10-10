@php
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
if(!isset($title)){
    $title= '';
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
    <div x-ref="{{ $modalID }}" x-show="{{ $modalID }}" class="absolute inset-0 flex items-center justify-center bg-gray-300 bg-opacity-75 p-1">
        <!-- Model Window -->
        <div class="pointer-events-auto mx-auto block h-[80%] w-full max-w-4xl rounded-lg bg-clip-padding text-sm" @click.outside="{{ $modalID }} = false">
            <!-- Model Header -->
            <div class="flex items-center justify-between rounded-t-lg border-b border-blue-500 bg-blue-600 bg-clip-padding py-2 px-3">
            <p class="flex items-center font-bold text-white">
                <span class="mr-2 h-4 w-4">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M1 3v2h22V3a2.001 2.001 0 0 0-2-2H3a2.001 2.001 0 0 0-2 2Zm3 1a.987.987 0 0 1-.993-.992A1.001 1.001 0 0 1 4 2a1.013 1.013 0 0 1 1.006 1.008A.998.998 0 0 1 4 4Zm3 0a1 1 0 1 1 1-1a1.004 1.004 0 0 1-1 1ZM1 6v14a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V6Zm20 14H3V8h18Z" /></svg>
                </span>
                {{ $title }}
            </p>
            <div class="flex items-center">
                <button class="bg-transparent text-gray-200 hover:text-gray-700" @click="{{ $modalID }} = false">
                <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                    {!! __('theme.closeSvgPath') !!}
                </svg>
                </button>
            </div>
            </div>
            <!-- Header End -->
            <!-- Model Body -->
            <div class="max-h-full overflow-auto break-words bg-white p-3 text-black">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe inventore ipsam officia corporis aspernatur, ea accusamus ab explicabo blanditiis ipsum adipisci, facilis magnam. Recusandae voluptate qui ratione quibusdam accusantium aut!</p>
            </div>
            <!-- Body End -->
            <!-- Model Footer -->
            <div class="flex">
            <div class="flex h-10 w-full justify-end space-x-1 rounded-b-lg bg-gray-100 py-1 px-2 shadow-lg">
                <button @click="{{ $modalID }} = false" class="transform rounded-md bg-red-600 px-4 py-1 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-red-500 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-80" bgcolor="red">Cancel</button>
                <button class="transform rounded-md bg-green-600 px-4 py-1 font-medium capitalize tracking-wide text-white transition-colors duration-300 hover:bg-green-500 focus:outline-none focus:ring focus:ring-green-300 focus:ring-opacity-80" bgcolor="green">Save</button>
            </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Window End -->
    </div>
    <!-- Mask End -->