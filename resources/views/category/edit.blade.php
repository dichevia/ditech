<h1>Edit Category</h1>

@error('name') <p>{{$message}}</p> @enderror

<form action="/categories/{{$category->id}}" method="POST">
    @method('PATCH')
    @include('category.form')
    <button>Edit category!</button>
</form>
