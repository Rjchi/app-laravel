<x-app title="Blog">
    <h3>Para inspeccionar datos utilizamos @ dump(Nombre de la variable)</h3>
    @dump($posts)
    <hr>
    @foreach($posts as $post)
        <h1>{{ $post -> id }}</h1>
        <h1>{{ $post -> title }}</h1>
    @endforeach
</x-app>
