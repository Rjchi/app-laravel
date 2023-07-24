<!-- Si queremos hacer operaciones a traves de las propiedades podemos utilizar ':' -->

<x-app title="Props" :sum="4 + 4">
    <h2>Home</h2>
    <h1>User:</h1>
    <p>{{ Auth::user() }}</p>
</x-app>
