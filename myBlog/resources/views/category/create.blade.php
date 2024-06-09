<x-app-layout>
    <h1>crear nuevo post:</h1>

    <form action="/category" method="POST">
        @csrf
        <label>
            Titulo:
            <input type="text" name="title">
        </label>
        <br>
        <label>
            contenido:
            <textarea name="content"> </textarea>
        </label>
        <br>
        <button type="submit">
            Crear post
        </button>
    </form>
    

    <br>
    
    <a href="/category/">volver a posts</a>



</x-app-layout>