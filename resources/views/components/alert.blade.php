<!-- {{ $type }} Alert box start -->
<div x-data class="relative mb-1 shadow " role="alert">
    <div class="flex ">
        <div class="w-16 bg-{{ $bgcolor }}-500 p-2 text-center">
            <div class="flex h-full items-center p-2">
                <svg width="26" height="26" class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                {{!! $svgpath !!}}
                </svg>
            </div>
        </div>
        <div class="w-full border-r-4 border-{{ $bgcolor }}-400 bg-white p-4">
            <p class="font-bold text-gray-600"> {{ $title }} </p>
            <p class="text-sm text-gray-600">{{ $slot }} </p>
        </div>
    </div>
    <button @click="$el.parentNode.remove()" class="absolute right-0 top-1 mr-2 bg-transparent text-3xl font-bold text-gray-400 hover:text-gray-700">
        <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
            <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
        </svg>
    </button>
</div>
<!-- {{ $type }} Alert box End-->
