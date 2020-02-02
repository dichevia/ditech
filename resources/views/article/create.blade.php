@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create article</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if ($errors->all())
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">{{$error}}</div>
                        @endforeach
                        @endif

                    <form method="POST" action="/articles" enctype="multipart/form-data">

                        @include('article.form')
                        <button type="submit" class="btn btn-primary">Create article</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


