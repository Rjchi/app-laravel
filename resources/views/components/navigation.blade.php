<ul>
    <!-- Proteccion contra inyeccion de codigo -->
    <!-- // Si no queremos que se inyecte contenido HTML -->
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('posts/index') }}">Blog</a></li>
    @guest
        <li><a href="{{ route('register') }}">Registro</a></li>
        <li><a href="{{ route('login') }}">Login</a></li>
    @else
    <h1>Nombre user: {{ Auth::user()->name }}</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>
                logout
            </button>
        </form>
    @endguest
</ul>
