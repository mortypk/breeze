<div class="flex flex-wrap">
    @for($i = 0; $i < 10; $i++)
    <!-- <a href="?{{ $i }}" class="border-gray-400 bg-gray-50 flex flex-row m-1 ">
        <div class="flex border-l-blue-200 border-l-8 w-72 h-24 transition duration-500 shadow ease-in-out transform hover:-translate-y-1 hover:border-l-blue-600 hover:shadow-lg select-none cursor-pointer bg-white p-2 rounded-md">
            <div class="w-24 h-20 py-2 ">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                    <path d="M320 0c17.7 0 32 14.3 32 32V49.7C483.8 63.4 589.7 161 605.9 285.9c2 15.6-17.3 24.4-27.8 12.7C564.1 283 536.8 272 512 272c-38.7 0-71 27.5-78.4 64.1c-1.7 8.7-8.7 15.9-17.6 15.9s-15.8-7.2-17.6-15.9C391 299.5 358.7 272 320 272s-71 27.5-78.4 64.1c-1.7 8.7-8.7 15.9-17.6 15.9s-15.8-7.2-17.6-15.9C199 299.5 166.7 272 128 272c-24.8 0-52.1 11-66.1 26.7c-10.5 11.7-29.8 2.9-27.8-12.7C50.3 161 156.2 63.4 288 49.7V32c0-17.7 14.3-32 32-32zm0 304c12.3 0 23.5 4.6 32 12.2V430.6c0 45-36.5 81.4-81.4 81.4c-30.8 0-59-17.4-72.8-45l-2.3-4.7c-7.9-15.8-1.5-35 14.3-42.9s35-1.5 42.9 14.3l2.3 4.7c3 5.9 9 9.6 15.6 9.6c9.6 0 17.4-7.8 17.4-17.4V316.2c8.5-7.6 19.7-12.2 32-12.2z"/>
                </svg>
            </div>
            <div class="w-96 p-1 pl-2 font-semibold overflow-hidden">{{ $i }} Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum in minima facilis facere optio ex deserunt? Quidem autem cum eos nam itaque explicabo voluptates maiores! Nobis explicabo libero dolor quaerat?</div>
        </div>
    </a> -->
    <x-icontextlink href="?{{ $i }}">
       {{ $i }} Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod minus, beatae numquam commodi explicabo architecto veniam, odio quo, aliquid labore cum est! Perferendis inventore quas saepe autem, ipsam sunt ex?
    </x-icontextlink>
    @endfor
</div>
