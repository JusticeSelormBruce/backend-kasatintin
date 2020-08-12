@extends('layouts.app')

@section('content')
<div class="row">
    <div class="mx-auto"><h1>Dashboard</h1></div>
</div>

<div class="container bg-dark">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
            <div class="jumbotron">
                <div class="card-body">
                    <h5 class="card-title">Categories     <span class="badge badge-danger">{{$categorie}}</span></h5>
                    <p class="card-text">Content</p>
                </div>
                <div class="card-footer"> Links: <a class="text-primary" href="{{ route('categories.index') }}">
                    {{ __('Categories') }}
                </a></div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
            <div class="jumbotron">
                <div class="card-body">
                    <h5 class="card-title">Posts  <span class="badge badge-danger">{{$post}}</span></h5>
                    <p class="card-text">Content</p>
                </div>
                <div class="card-footer">Links:  <a class="text-primary" href="{{ route('posts.index') }}">
                    {{ __('Post') }}
                </a></div>
            </div>
        </div>

      


    </div>
</div>
<div class="container bg-dark   ">
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
            <div class="jumbotron">
                <div class="card-body">
                    <h5 class="card-title">Users  <span class="badge badge-danger">{{$users}}</span></h5>
                    <p class="card-text">Content</p>
                </div>
                <div class="card-footer">Links:    <a class="text-primary" href="{{ route('users.index') }}">
                    {{ __('Users') }}
                </a></div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
            <div class="jumbotron">
                <div class="card-body">
                    <h5 class="card-title">Tags  <span class="badge badge-danger">{{$tags}}</span></h5>
                    <p class="card-text">Content</p>
                </div>
                <div class="card-footer"> Links:  <a class="text-primary" href="{{ route('tags.index') }}">
                    {{ __('Tags') }}
                </a></div>
            </div>
        </div>


    </div>
</div>

@endsection
