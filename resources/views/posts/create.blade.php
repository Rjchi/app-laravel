<x-app title="Crete new Post">
    @dump($errors->all())
    <h1>Create new Post</h1>
    <form action="{{ route('posts/store') }}" method="POST">
        @csrf
        <br>
        <label>
            Title
            <input name="title" type="text" value="{{ old('title') }}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <br>
        <label>
            Body
            <textarea name="body">{{old('body')}}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <button type="submit">Save</button>
    </form>
</x-app>
