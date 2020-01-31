@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ $article->title }}</div>
                <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">{{ $article->description }}</h6>
                <p class="card-text"> {{ $article->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


