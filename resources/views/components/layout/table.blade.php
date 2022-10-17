<div class="dark flex flex-col h-full shadow-md sm:rounded-lg">
    <div class="mb-1 pl-1 border rounded-lg bg-white">
        <div {{ $attributes->class(['flex space-x-3'])->merge() }}>
            @isset($link)
            {{ $link }}
            @endisset
        </div>
    </div>
    <div class="flex-grow overflow-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            @isset($head)
        <thead class="sticky top-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{ $head }}
            </tr>
        </thead>
        @endisset
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
    </div>
</div>