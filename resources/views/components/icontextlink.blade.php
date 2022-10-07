<a href=" {{ $href }} " class="border-gray-400 bg-gray-50 flex flex-row m-1 ">
    <div class="flex border-l-{{ $bgcolor }}-200 border-l-8 w-72 h-24 transition duration-500 shadow ease-in-out transform hover:-translate-y-1 hover:border-l-{{ $bgcolor }}-600 hover:shadow-lg select-none cursor-pointer bg-white p-2 rounded-md">
        <div class="w-24 h-20 py-2 ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
            {{!! $iconpath !!}}
        </svg>
        </div>
        <div class="w-96 p-1 pl-2 font-semibold overflow-hidden">
            {{ $slot }}
        </div>
    </div>
</a>