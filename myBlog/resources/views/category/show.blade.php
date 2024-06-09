<x-app-layout>
    

    <h1>titulo: {{ $post ->title}}</h1>
    <p>
    <b>autor:</b> {{ $post ->poster}}
    </p>
    <p>
         {{ $post ->content}}
    </p>



    <a href="/category/">volver a posts</a>
</x-app-layout>