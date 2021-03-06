@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($categories as $category)
                    <a href="/categories/{{$category->id}}" class="list-group-item list-group-item-action">{{$category->name}}</a>
                    @empty
                        <p>No categories to show</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
