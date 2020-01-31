@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center mb-5">
            @foreach($articles as $article)
              <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                      <h6 class="card-subtitle mb-4 text-muted">{{ $article->description }}</h6>
                      <a href="#" class="card-link">Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


