<style>

    @media(min-width: 720px){
        .img-carouse {
            height: 50vh!important;
           
        }
    
    }
      
    </style>
<div class="jumbotron  pt-2 bg-dark">
   <div class="row">
    <div class="text-danger mx-2 text-uppercase"> <span class="badge badge-primary  text-uppercase">@include('write')</span></div>

    <h5 class="text-danger mx-2">   <span class="badge badge-danger">New</span></h5><span class="ml-5">
     
    </span>
   </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 pt-3 pl-2">
            <aside class="pt-4">
                <div class="pl-2">
                <h6 class="text-danger shadow-lg bg-dark" >   {{ \Illuminate\Support\Str::limit($new_post[0]->title, 100) }}</h6>
                </div>
                <hr>
                <hr>    
      <div class="pt-2 pl-2">
        <p style="text-align: justify !important">      {{ \Illuminate\Support\Str::limit($new_post[0]->content, 500) }}</p>
      </div>
            </aside>
        </div>
        <div class="col-lg-8  col-md-8 col-sm-12">
          <a href="/post_show/{{ $new_post[0]->id}}">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @for ($i = 0; $i < sizeof($new_post[0]->images); $i++)
                        @if ($i == 0)
                            <div class="carousel-item active">
                                <img src="{{ $new_post[0]->images[$i]->url }}" class="d-block w-100 img-carouse" alt="attachment">
                            </div>
                        @else
                            <div class="carousel-item ">
                                <img src="{{ $new_post[0]->images[$i]->url }}" class="d-block w-100 img-carouse " alt="attachment">
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
            
        </div>
          </a>
    </div>

</div>
