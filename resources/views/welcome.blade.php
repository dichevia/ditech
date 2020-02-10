@extends('layouts.app')

@section('content')

<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
        <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="{{url('img/tech-banner.jpg')}}" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-5">
            <h1 class="font-weight-light">Ditech</h1>
            <p>Ditech tells you what's new in tech, culture and science, why it matters, how it works and what you need.
            </p>
            <a class="btn btn-primary" href="/articles">Read all news!</a>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <p class="text-white m-0">To use full functionality of the site please <a href="/register">register</a> or
                <a href="/login">login</a> to our system!</p>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        @foreach($articles as $article)
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">{{ $article->title }}</h2>
                    <p class="card-text">{{ $article->description }}</p>
                </div>
                <div class="card-footer">
                    <a href="articles/{{ $article->id }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@endsection
