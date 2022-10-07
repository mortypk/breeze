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
        <div>
            <p class="font-bold text-gray-600"> {{ $title }} </p>
            <p class="text-sm text-gray-600">{{ $slot }} </p>
        </div>
        </div>
    </div>
    <button @click="$el.parentNode.remove()" class="absolute right-0 top-0 mr-2 bg-transparent text-3xl font-bold text-gray-500 hover:text-gray-900">
        <span>×</span>
    </button>
</div>
<!-- {{ $type }} Alert box End-->
