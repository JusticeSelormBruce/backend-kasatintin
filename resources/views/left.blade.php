<div class="row">
    <div class=" bg-dark">
        <div class="card-body bg-dark">
            <div class="row">
                <h5 class="card-title">{{ $post->title }}</h5>
                <div class="ml-auto mr-5">
                    @foreach ($post->tags as $item)
                  <h6 class="badge badge-pill badge-info h6">#{{$item->title}}</h6>
                    @endforeach
                </div>
            </div>
            <div class="mx-3">@include('model.post.image-carousel')</div>
            @include('model.post.video-carousel')
            

            <p class="card-text">{{ $post->content }}</p>
            @include('inline')
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
        </div>
        @include('model.comment.form')
        @foreach ($post->comments as $item)

           <div class=" bg-dark py-0 w-lg-75 ml-lg-5 ml-md-5 ml-sm-0 mx-sm-0">
            <div class=" bg-dark ">
                <div class="card-body">
                    <h5 class="card-title ml-lg-3 ml-md-3 ml-sm-0"> <img src="{{ $item->author->avatar }}" alt="user_avatr"
                            class="rounded user_avatr mr-2">
                      {{ $item->author->first_name }} <span class="mx-1">{{ $item->author->last_name }}</span>
                    </h5>
                   
                  
                    <div class="card-footer b">
                        <span class="card-text" style="text-align: justify !important">{{ $item->content }}</span>
                    </div>
                </div>

            </div>
           </div>

        @endforeach


    </div>
  
</div>