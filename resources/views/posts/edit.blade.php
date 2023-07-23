<x-app title="{{ $post->id }}">
    @dump($post)
    <hr>
    @dump($errors->toArray())
    <h1>Edit</h1>
    <form action="{{ route('posts/update', $post) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('posts/form-fields')
        <br>
        <button type="submit">Save</button>
    </form>
</x-app>
