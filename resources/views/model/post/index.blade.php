<style>
    img {
        width: 40px;
        height: 40px;
        border-radius: 50px !important
    }

</style>
@extends('layouts.app')
@section('content')
    <div class="container">
        @include('shared.alert')
        <div class="row mr-5">
            <div class="ml-auto">
            @include('model.post.form')
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="mr-auto mx-5">
                <h5>All Posts</h5>
            </div>
            <div class="ml-auto mr-5">
                {{ $posts->links() }}
            </div>
        </div>
        <hr>
        <section>
            <div class="row">
                @foreach ($posts as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12 py-1">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> <img src="{{ $item->author->avatar }}" alt="user_avatr"
                                        class="rounded mr-1">{{ $item->author->first_name }} <span
                                        class="mx-1">{{ $item->author->last_name }}</span></h5>
                                <hr>
                                <p class="card-text">

                                    {{ \Illuminate\Support\Str::limit($item->content, 100) }}</p>

                                    <div class="row">
                                        <span class="mx-2">post at</span>{{ $item->created_at->format('H:i') }}
                                        <div class="mx-auto">
                                            <a href="{{ route('post.show', ['id' => $item->id]) }}" class="text-primary">
                                                <span>Read More</span></a>
                                        </div>
                                    </div>
                                <div class="card-footer">
                                    <div class="row">
                                       <div class="ml-auto mx-2">@include('model.post.delete')</div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
