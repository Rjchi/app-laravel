<x-app title="{{ $post->id }}">
    @dump($post)
    <hr>
    @dump($errors->all())
    <h1>Edit</h1>
    <form action="{{ route('posts/update', $post) }}" method="POST">
        @csrf
        @method('PATCH')
        <br>
        <label>
            Title
            <input name="title" type="text" value="{{ old('title', $post->title) }}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <br>
        <label>
            Body
            <textarea name="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </label>
        <br>
        <button type="submit">Save</button>
    </form>
</x-app>
