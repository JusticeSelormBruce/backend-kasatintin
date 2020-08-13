@extends('layouts.home')
@section('content')
<div class="py-3">
    @include('categories')
</div>
    @include('new')

    <hr>
    <h5 class="text-danger mx-2"> Latest News <span class="badge badge-primary">{{ sizeof($latest_post) }}</span></h5>
    @include('latest_posts')

    <div class="py-4">
        @include('footer')
    </div>

@endsection
