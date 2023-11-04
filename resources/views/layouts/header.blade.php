<nav class="bg-stone-400 border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="{{ route('index') }}" class="flex items-center">
                    <x-application-icon iconType="house"/>
                </a>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
            <x-application-icon iconType="house"/>
        </a>
        <a href="/subjects" class="{{ request()->is('/') ? 'active' : '' }}">
            <x-application-icon iconType="graduation-cap"/>
        </a>
        <a href="/subjects/courses" class="{{ request()->is('/') ? 'active' : '' }}">
            <x-application-icon iconType="laptop-code"/>
        </a>
        @auth
            <li>
                <form method="POST" class="inline" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"></i>Logout
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
            </li>
        @endauth
    </div>
</nav>
