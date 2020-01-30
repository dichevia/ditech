<h1>Create Category</h1>

@error('name') <p>{{$message}}</p> @enderror

<form action="/categories" method="POST">
    @include('category.form')
    <button>Add category!</button>
</form>
