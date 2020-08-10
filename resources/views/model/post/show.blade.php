<style>
    .user_avatr {
        width: 40px;
        height: 40px;
        border-radius: 50px !important
    }

</style>
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="jumbotron">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                 
                        @include('model.post.image-carousel')
                  
                       @include('model.post.video-carousel')
                

                    <p class="card-text">{{ $post->content }}</p>
                </div>
            </div>
            @include('model.comment.form')
            @foreach ($post->comments as $item)

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> <img src="{{ $item->author->avatar }}" alt="user_avatr"
                                class="rounded user_avatr">
                            <br>{{ $item->author->first_name }} <span class="mx-1">{{ $item->author->last_name }}</span>
                        </h5>
                        <p class="card-text">{{ $item->content }}</p>
                        <div class="card-footer">
                            <span class="mx-2">commented at</span>{{ $item->created_at->format('H:i') }}
                        </div>
                    </div>

                </div>

            @endforeach


        </div>
    </div>
@endsection
