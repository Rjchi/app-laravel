<x-app title="Blog">
    <h3>Para inspeccionar datos utilizamos @ dump(Nombre de la variable)</h3>
    @dump($posts)
    <hr>
    <a href="{{ route('posts/create') }}">Create new post</a>
    <hr>
    @foreach ($posts as $post)
        <div>

            <h2>Para ver las propiedades de cada objeto utilizamos { { $ nombre - > nombre de la propiedad } }</h2>
            <!-- <h1><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h1> -->
            <h1><a href="{{ route('posts/show', $post) }}">{{ $post->title }}</a></h1>
            <a href="{{ route('posts/edit', $post) }}">Edit</a>
        </div>
    @endforeach

</x-app>
