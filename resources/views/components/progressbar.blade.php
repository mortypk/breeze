<div class="w-full bg-gray-200 rounded-full h-4 overflow-hidden relative p-1">
    <div class="bg-{{ $bgcolor }}-600 absolute top-0 left-0 right-0 bottom-0 rounded-l-full p-[1px] w-[{{ $nvalue }}%]">
        <div class="text-xs font-medium text-{{ $bgcolor }}-100 text-center leading-none">{{ $nvalue }}% {{ $slot }}</div>
    </div>
</div>
