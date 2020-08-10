@extends('layouts.home')
@section('content')
    <div class="container py-0">
        @include('categories')
        @include('latest_posts')
    </div>
@endsection
