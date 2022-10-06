<!-- {{ $type }} Alert box start -->
<div x-data class="relative mb-1 shadow " role="alert">
    <div class="flex ">
      <div class="w-16 bg-{{ $typeColor }}-500 p-2 text-center">
        <div class="flex h-full items-center p-2">
            <svg width="26" height="26" class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            @if ($typeColor === 'blue')
            <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-144c-17.7 0-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32s-14.3 32-32 32z" />
            @elseif ($typeColor === 'yellow')
            <path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32z" />
            @elseif ($typeColor === 'green')
            <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            @elseif ($typeColor === 'red')
            <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zm0-384c13.3 0 24 10.7 24 24V264c0 13.3-10.7 24-24 24s-24-10.7-24-24V152c0-13.3 10.7-24 24-24zm32 224c0 17.7-14.3 32-32 32s-32-14.3-32-32s14.3-32 32-32s32 14.3 32 32z" />
            @endif
            </svg>
        </div>
      </div>
      <div class="w-full border-r-4 border-{{ $typeColor }}-400 bg-white p-4">
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
<!-- Alert box End-->