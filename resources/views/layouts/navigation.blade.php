<nav class="bg-white shadow-md">
    <div class="container flex items-start mx-auto max-w-7xl px-2  text-gray-500 text-base">
        <a href="#" class="flex p-3 border-y-2 border-y-gray-50 border-r text-gray-700 hover:text-blue-700 hover:font-bold ">
            <div>
                M
            </div>
            <div class="pl-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-5 h-5">
                    <path d="M0 160v96C0 379.7 100.3 480 224 480s224-100.3 224-224V160H320v96c0 53-43 96-96 96s-96-43-96-96V160H0zm0-32H128V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v64zm320 0H448V64c0-17.7-14.3-32-32-32H352c-17.7 0-32 14.3-32 32v64z"/>
                </svg>
            </div>
            <div>
                NSHI
            </div>
        </a>
        
        <a href="#" class="flex p-3 border-y-2 border-y-gray-50 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 hover:border-b-blue-300 hover:bg-gray-100 hover:border-y-1 active:border-b-blue-600 active:shadow-inner active:shadow-gray-300">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"  fill="currentColor" class="w-6 h-6">
                <path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32V448c0 35.3 28.7 64 64 64H230.4l-31.3-52.2c-4.1-6.8-2.6-15.5 3.5-20.5L288 368l-60.2-82.8c-10.9-15 8.2-33.5 22.8-22l117.9 92.6c8 6.3 8.2 18.4 .4 24.9L288 448l38.4 64H448.5c35.5 0 64.2-28.8 64-64.3l-.7-160.2h32z"/></svg>
            </div>
            <div class="pl-1">Home</div>
        </a>
        <!-- Dropdown toggle start -->
        <div x-data="{dropdownMenu: false}" class="relative">
            <!-- Dropdown toggle button -->
            <a @click="dropdownMenu = ! dropdownMenu"
                    class="flex p-3 border-y-2 border-y-gray-50 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 hover:border-b-blue-300 hover:bg-gray-100 hover:border-y-1 active:border-b-blue-600 active:shadow-inner active:shadow-gray-300">
                <span class="mr-4">Dropdown </span>
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </a>
            <!-- Dropdown list -->
            <div x-show="dropdownMenu" @click.outside="dropdownMenu = false" class="absolute right-0 py-2 mt-1 text-sm text-gray-500 bg-gray-50 rounded-md shadow-xl w-44">
                <a href="#" class="block px-4 py-2 hover:bg-blue-300 hover:text-black">
                Dropdown List 1
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-300 hover:text-black">
                Dropdown List 2
                </a>
                <a href="#" class="block px-4 py-2 hover:bg-blue-300 hover:text-black">
                Dropdown List 3
                </a>
            </div>
        </div>
        <!-- Dropdown toggle End -->
        <div class="flex-grow"></div>
        <!-- Dropdown toggle start -->
        <div x-data="{dropdownMenu: false}" class="relative">
            <!-- Dropdown toggle button -->
            <a @click="dropdownMenu = ! dropdownMenu"
                    class="flex p-3 border-y-2 border-y-gray-50 hover:text-gray-700 hover:shadow-inner hover:shadow-gray-300 hover:border-b-blue-300 hover:bg-gray-100 hover:border-y-1 active:border-b-blue-600 active:shadow-inner active:shadow-gray-300">
                <span class="mr-4">{{ Auth::user()->name }} </span>
                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </a>
            <!-- Dropdown list -->
            <div x-show="dropdownMenu" @click.outside="dropdownMenu = false"
                    class="absolute right-0 py-2 mt-1 text-sm text-gray-500 bg-gray-50 rounded-md shadow-xl w-44">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')"
                        class="block px-4 py-2 hover:bg-blue-300 hover:text-black"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
        <!-- Dropdown toggle End -->
    </div>
</nav>