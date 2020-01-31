
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item">{{ $category->name }}</li>
                    <li class="list-group-item list-group-item">
                        <a class="btn btn-primary" href="/categories/{{$category->id}}/edit">Edit</a>
                    </li>
                    <li class="list-group-item list-group-item">
                        <div>
                            <form action="/categories/{{$category->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection


