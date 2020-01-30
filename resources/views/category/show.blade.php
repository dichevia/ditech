<h1>Show single category</h1>
<div><a href="/categories">back to all categories</a></div>

 <p><strong>ID:</strong> {{$category->id}}</p>
 <p><strong>Category Name:</strong> {{$category->name}}</p>

<div>
    <a href="/categories/{{$category->id}}/edit">Edit</a>

    <form action="/categories/{{$category->id}}" method="POST">
        @method('DELETE')
        @csrf

        <button >Delete</button>
    </form>

</div>


