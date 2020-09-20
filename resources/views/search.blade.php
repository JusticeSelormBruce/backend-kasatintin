<style>
    .user_avatr {
        width: 40px;
        height: 40px;
        border-radius: 50px !important
    }

</style>
@extends('layouts.home')

@section('content')
<div class="container">
<h5>  search result<span class="badge" >{{$post_main->count()}}</span></h5>
    <hr>
    <div class="row">
    @foreach ($_post as $item)
    <a href="/post_show/{{$item->id}}">
        <div class="col-lg-3 col-md-6  col-sm-12">
            <div class="card mb-3 h-25 bg-dark">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @for ($i = 0; $i < sizeof($item->images); $i++)
                            @if ($i == 0)
                                <div class="carousel-item active">
                                    <img src="{{ asset($item->images[$i]->url) }}" class="d-block w-100 img-carousel" alt="attachment">
                                </div>
                            @else
                                <div class="carousel-item ">
                                    <img src="{{  asset($item->images[$i]->url) }}" class="d-block w-100 img-carousel " alt="attachment">
                                </div>
                            @endif
                
                        @endfor
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                <div class="card-body">
                  <h5 class="card-title"> {{$item->title }}</h5>
                  <p class="card-text">{{ \Illuminate\Support\Str::limit($item->content, 100) }}</p>
                  <div class="row">
                    <p class="card-text"><small class="text-muted">
                            {{ $item->updated_at->format('D,M,Y') }}
                            <div class="ml-auto mr-3"><a href="/post_show/{{$item->id}}">Read More</a></div>
                        </small></p>
                </div>
                 
                </div>
              </div>
            </div>    
        </div>   
    </a>
    @endforeach
    </div>
    {{$post->links()}}
</div>
    

@endsection
