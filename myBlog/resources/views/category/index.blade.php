<x-app-layout>
    
Index category
<ul>
@foreach ($posts as $post)

<li>

    <a href="/category/show/{{ $post ->id}}">
        {{ $post ->title}}
    </a>
</li>

@endforeach
</ul>
</x-app-layout>