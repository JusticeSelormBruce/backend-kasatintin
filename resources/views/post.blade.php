<style>
    .user_avatr{
        width: 50px;
    }
</style>
@extends('layouts.home')
@section('content')
   <div class="container">
    <div class="card bg-dark">
        <div class="jumbotron bg-dark pt-1">
            <div class="card-body bg-dark">
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

           <div class="jumbotron bg-dark py-0 w-75 ml-lg-5 ml-md-5 ml-sm-0">
            <div class="card bg-dark">
                <div class="card-body">
                    <h5 class="card-title ml-lg-3 ml-md-3 ml-sm-0"> <img src="{{ $item->author->avatar }}" alt="user_avatr"
                            class="rounded user_avatr mr-2">
                      {{ $item->author->first_name }} <span class="mx-1">{{ $item->author->last_name }}</span>
                    </h5>
                   
                  
                    <div class="card-footer">
                        <span class="card-text">{{ $item->content }}</span>
                    </div>
                </div>

            </div>
           </div>

        @endforeach


    </div>
</div> 
@endsection
