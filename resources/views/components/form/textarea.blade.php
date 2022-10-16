<textarea {{ $attributes->class(["block p-1 w-full min-w-0 flex-1 rounded-none border border-gray-300 bg-white text-base 
first:rounded-l-md last:rounded-r-md"])->merge() }}>{{ $slot }}</textarea>
