<x-app title="Register">
    <h1>Login</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <br>
        <br>
        <label>
            Email
            <input name="email" type="email" value="{{ old('email') }}">
            @error('email')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <br>
        <label>
            Password
            <input name="password" type="password">
            @error('password')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <br>
        <label>
            <input name="remember" type="checkbox">
            <span>
                Recuerdame
            </span>
        </label>
        <br>
        <a href="{{ route('register') }}">Register</a>
        <br>
        <button type="submit">Login</button>
    </form>
</x-app>
