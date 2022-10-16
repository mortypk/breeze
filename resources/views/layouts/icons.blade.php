<x-layout.flexwrap class="rounded-md">
    @for($i = 0; $i < 10; $i++)
    <x-view.icontextlink href="?{{ $i }}">
        {{ $i }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
    </x-view.icontextlink>
    @endfor
</x-layout.flexwrap>
