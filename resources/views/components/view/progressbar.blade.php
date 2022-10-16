@php
    if(!isset($percent)){
        $percent = 0;
    }else{
        $percent = (int)$percent;
    }
    if(!isset($bgcolor)){
        $bgcolor= trans('theme.bgcolor');
    }
@endphp
<div {{ $attributes->class(["w-full outline outline-1 outline-".$bgcolor."-600/50 h-4 overflow-hidden relative p-1"])->merge() }}>
    <div class="bg-{{ $bgcolor }}-600 flex absolute top-0 left-0 right-0 bottom-0 w-[{{ $percent }}%]">
        <div class="m-auto">
            <div class="text-xs font-medium text-{{ $bgcolor }}-100 truncate">{{ $percent }}% {{ $slot }}</div>
        </div>
    </div>
</div>
