<!-- resources/views/posts/index.blade.php -->
<x-app-layout>
    <div class="posts-container p-6 bg-slate-800 dark:bg-gray-800 shadow sm:rounded-lg ">
        <h1 class="text-2xl font-bold mb-6">Todos los Posts</h1>
        <ul class="list-disc pl-5 space-y-2 ">
            @foreach ($posts as $post)
                <li >
                    <a href="/category/show/{{ $post->id }}" class="text-blue-500 hover:underline">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>