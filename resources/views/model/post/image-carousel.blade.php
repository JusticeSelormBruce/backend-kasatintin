<style>

@media(min-width: 720px){
  .img-carousel{
      height:50vh!important;
      width:50vw!important;
  }

}
  
</style>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @for ($i = 0; $i < sizeof($post->images); $i++)
            @if ($i == 0)
                <div class="carousel-item active">
                    <img src="{{asset($post->images[$i]->url) }}" class="d-block w-100 img-carousel " alt="attachment">
                </div>
            @else
                <div class="carousel-item ">
                    <img src="{{asset( $post->images[$i]->url) }}" class="d-block w-100 img-carousel " alt="attachment">
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
