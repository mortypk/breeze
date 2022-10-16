<div class="dark flex flex-col h-full shadow-md sm:rounded-lg">
    <div class="mb-1 pl-1 border rounded-lg bg-white">
        {{ $link }}
    </div>
    <div class="flex-grow overflow-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="sticky top-0 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                {{ $head }}
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
    </div>
</div>