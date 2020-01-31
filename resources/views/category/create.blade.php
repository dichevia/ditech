@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create category</div>

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

                    <form method="POST" action="/categories">

                        <div class="form-group">
                            <label for="name">Category Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Category name">
                          </div>
                        @csrf
                        <button type="submit" class="btn btn-primary">Create category</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


