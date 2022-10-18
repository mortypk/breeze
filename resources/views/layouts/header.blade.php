<header>
    <x-nav.bar>
        <x-nav.logo>
            <div>M</div>
            <div class="pl-1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="h-5 w-5">
                <path d="M0 160v96C0 379.7 100.3 480 224 480s224-100.3 224-224V160H320v96c0 53-43 96-96 96s-96-43-96-96V160H0zm0-32H128V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v64zm320 0H448V64c0-17.7-14.3-32-32-32H352c-17.7 0-32 14.3-32 32v64z" />
                </svg>
            </div>
            <div>NSHI</div>
        </x-nav.logo>
        <x-nav.link href="{{ route('home') }}">Home</x-nav.link>
        <x-nav.link href="{{ route('staff.index') }}">Staff</x-nav.link>
        <x-nav.link href="{{ route('posts.index') }}">Posts</x-nav.link>
        <x-nav.link href="{{ route('student.index') }}">Student</x-nav.link>
        <x-nav.link href="{{ route('product.index') }}">Product</x-nav.link>
        @yield('nav')
        <x-nav.dropdown caption="Staff">
            <x-nav.dropdown-link href="{{ route('staff.index') }}">Staff List</x-nav.dropdown-link>
            <x-nav.dropdown-link href="{{ route('title.index') }}">Designations</x-nav.dropdown-link>
        </x-nav.dropdown>
        <x-nav.dropdown>
            <x-nav.dropdown-link>One</x-nav.dropdown-link>
            <x-nav.dropdown-link>Two</x-nav.dropdown-link>
            <x-nav.dropdown-link>Three</x-nav.dropdown-link>
        </x-nav.dropdown>
        <div class="flex-grow"></div>
        @if (Route::has('login'))
                @auth
                <x-nav.link href="{{ url('/dashboard') }}">Dashboard</x-nav.link>
                @else
                    <x-nav.link href="{{ route('login') }}">Log in</x-nav.link>
                    @if (Route::has('register'))
                        <x-nav.link href="{{ route('register') }}">Register</x-nav.link>
                    @endif
                @endauth
        @endif
    </x-nav.bar>
</header>