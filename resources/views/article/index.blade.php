@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="my-4">All articles</h1>

    <div class="row">
        @foreach($articles as $article)
      <div class="col-lg-4 mb-4">

        <div class="card h-100">
          <a href="#"><img class="card-img-top" src="{{ asset($article->image)}}"    alt=""></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="#">{{ $article->title }}</a>
            </h4>
            <p class="card-text">{{ $article->description }}</p>
          </div>
        </div>

      </div>
      @endforeach
    </div>

  </div>
@endsection
