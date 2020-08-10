@extends('layouts.home')
@section('content')
   <div class="container">
    <div class="card">
        <div class="jumbotron">
            <div class="card-body">
                <div class="row">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <div class="ml-auto mr-5">
                        @foreach ($post->tags as $item)
                      <h6 class="badge badge-pill badge-info h6">#{{$item->title}}</h6>
                        @endforeach
                    </div>
                </div>
           
             
                    @include('model.post.image-carousel')
              
                   @include('model.post.video-carousel')
            

                <p class="card-text">{{ $post->content }}</p>
            </div>
        </div>
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
