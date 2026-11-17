<header class="bg-white border-b border-2">
    <div>
        logo
    </div>

    <div>
        Github

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-blue-500 hover:underline">Logout</button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
        @endguest
    </div>
</header>