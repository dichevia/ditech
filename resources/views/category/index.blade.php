<h1>Categories</h1>

<a href="/categories/create">Add new category</a>

<div><a href="/categories?active=1">active</a> | <a href="/categories?active=0">inactive</a></div>

@forelse ($categories as $category)
<p><a href="/categories/{{$category->id}}">{{$category->name}}</a></p>
@empty
    <p>No categories to show</p>
@endforelse
