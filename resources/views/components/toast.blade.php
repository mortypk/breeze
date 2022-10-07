<div x-data x-ref="toast" class="pointer-events-auto mx-auto mb-3 block w-full rounded-lg bg-clip-padding text-sm shadow-lg">
    <div class="flex items-center justify-between rounded-t-lg border-b border-{{ $bgcolor }}-500 bg-{{ $bgcolor }}-600 bg-clip-padding py-2 px-3">
        <p class="flex items-center font-bold text-white">
            <svg aria-hidden="true" focusable="false" class="mr-2 h-4 w-4 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                {{!! $svgpath !!}}
            </svg>
            {{ $title }}
        </p>
        <div class="flex items-center">
            <p class="text-xs text-white opacity-90">{{ $mtime }}</p>
            <button class="bg-transparent text-gray-200 hover:text-gray-700" @click="$refs.toast.remove()">
                <svg class="ml-3 w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="break-words rounded-b-lg bg-white p-3 text-black">{{ $slot }}</div>
</div>
