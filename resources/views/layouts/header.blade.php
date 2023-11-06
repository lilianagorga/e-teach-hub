<nav class="card m-4 rounded px-4 py-5">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
            <x-application-icon iconType="house"/>
        </a>
        <a href="/subjects" class="{{ request()->is('/') ? 'active' : '' }}">
            <x-application-icon iconType="graduation-cap"/>
        </a>
        <a href="/courses" class="{{ request()->is('/') ? 'active' : '' }}">
            <x-application-icon iconType="laptop-code"/>
        </a>
        @auth
            <li>
                <form method="POST" class="inline hover:text-cyan-800 text-stone-700 font-nunito font-bold" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"></i>Logout
                    </button>
                </form>
            </li>
        @else
            <li>
                <a href="/register" class="hover:text-cyan-800 text-stone-700 font-nunito font-bold"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-cyan-800 text-stone-700 font-nunito font-bold"><i class="fa-solid fa-arrow-right-to-bracket"></i>Login</a>
            </li>
        @endauth
    </div>
</nav>
