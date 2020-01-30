@extends('app')

@section('title', 'Articles')

@section('content')
<h2>Ditech Articles</h2>

@error('title') {{$message}} @enderror
@error('description') {{$message}} @enderror
@error('content') {{$message}} @enderror

<form method="POST" action="/article">
    <label>Title</label>
    <input type="text" name="title" autocomplete="off"/>
    <label>Description</label>
    <input type="text" name="description" autocomplete="off"/>
    <label>Content</label>
    <input type="text" name="content" autocomplete="off"/>
    @csrf
    <button>Add article</button>
</form>

<ul>
    @forelse($articles as $article)
    <li>{{ $article->title }}</li>
    @empty
    <li>No services</li>
    @endforelse
</ul>

@endsection
