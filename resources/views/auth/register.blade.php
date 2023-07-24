<x-app title="Register">
    <h1>Register</h1>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label>
            Name
            <input autofocus="autofocus" name="name" type="text" value="{{ old('name') }}">
            @error('name')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
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
            Password Confirmation
            <input name="password_confirmation" type="password">
            @error('password_confirmation')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>

        <button type="submit">Register</button>
    </form>
</x-app>
