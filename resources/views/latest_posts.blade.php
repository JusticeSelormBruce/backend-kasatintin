<div class="row">
    <div class="col-lg-8 col-m-6 col-sm-12">
        <div class="row">
            @foreach ($latest_post as $item)
                <a href="/post_show/{{ $item->id }}">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card mb-3 h-25 bg-dark">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    @for ($i = 0; $i < sizeof($item->images); $i++)
                                        @if ($i == 0)
                                            <div class="carousel-item active">
                                                <img src="{{asset($item->images[$i]->url) }}" 
                                                    class="d-block w-100 img-carousel " alt="attachment">
                                            </div>
                                        @else
                                            <div class="carousel-item ">
                                                <img src="{{asset( $item->images[$i]->url) }}" 
                                                    class="d-block w-100 img-carousel h-25" alt="attachment">
                                            </div>
                                        @endif

                                    @endfor
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $item->title }}</h5>
                                    <p class="card-text" style="text-align: justify !important">
                                        {{ \Illuminate\Support\Str::limit($item->content, 100) }}</p>

                                    <div class="row">
                                        <p class="card-text"><small class="text-muted">
                                                {{ $item->updated_at->format('D,M,Y') }}
                                                <div class="ml-auto mr-3"><a href="/post_show/{{ $item->id }}">Read
                                                        More</a></div>
                                            </small></p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
    <div class="col-lg-4 col-md-6 col-sm-12 ">
        <div class="jumbotron py-1  px-0 bg-secondary">
            @include('shared.alert')
            @if ($polls != null)
            <form action="/vote" method="POST">
                @csrf
                <input type="hidden" value="{{ $polls['id'] }}" name="poll_id">
                <div class="card-body">
                    <h5 class="card-title h3">{{ $polls['title'] }}</h5>
                    <hr>
                    <hr>
                    <p class="card-text h4">{{ $polls['description'] }}</p>
                    <hr>
                    <?php $options = explode(',', $polls['selection']); ?>
                   
                    @foreach ($options as $item)
                        <div class="row ml-2">
                            <input type="radio" value="{{ $item }}" name="choice" required> <span
                                class="mx-2 h5 text-primary">{{ $item }}</span>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="mx-auto"><button class="btn btn-primary btn-sm">Submit</button>
                            <span class="mx-2">

                                <a class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Results
                                </a>


                            </span></div>
                    </div>
                </div>
            </form>  
            @endif
           
          @if(!$results == null)
          <div class="collapse" id="collapseExample">
            <div class="card card-body bg-dark w-100">
                @foreach ($results->groupBy('choice') as $item)
                    <hr>
                    <span class="card-footer">
                        <h5 class="mx-2"> {{ $item[0]['choice'] }}<span class="badge badge-primary mx-2">
                                {{ $item->count() }}</span></h5>


                    </span>
                @endforeach
            </div>
        </div>
          @endif
        </div>
        <div class="pt-5"> @include('youtube')</div>
        <hr>
        <div class="pt-5 pb-3">
            <span class="mx-2 h6">Get the latest news update in your inbox</span> <b>Subscribe Now</b>
            <form class=" input-group-sm" method="POST" action="/subscribe">
                @csrf
                <div>
                    <input class="form-control mr-sm-2 w-100 pb-2" type="email" placeholder="eg. ewave80@gmail.com"
                        name="email" required>
                    <span class="text-danger"> {{ $errors->first('email') }}</span>
                </div>
                <hr>
                <button class="btn btn-outline-success my-2 my-sm-0 btn-sm" type="submit">Subscribe</button>
            </form>
        </div>
        <hr>
        @include('contact')
    </div>
</div>
