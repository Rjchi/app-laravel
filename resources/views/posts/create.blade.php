<x-app title="Crete new Post">
    @dump($errors->toArray())
    <h1>Create new Post</h1>
    <form action="{{ route('posts/store') }}" method="POST">
        @csrf
        @include('posts/form-fields')
        <button type="submit">Save</button>
    </form>
</x-app>
