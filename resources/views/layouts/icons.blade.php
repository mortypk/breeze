<x-flexwrap class="rounded-md">
    @for($i = 0; $i < 10; $i++)
    <x-icontextlink href="?{{ $i }}">
        {{ $i }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
    </x-icontextlink>
    @endfor
</x-flexwrap>
