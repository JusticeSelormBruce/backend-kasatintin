@extends('layouts.app')

@section('content')


    <div class="container">
        @include('shared.alert')
        <hr>
        <section>
            <div class="alert alert-dark py-0" role="alert">
                <h5>Comments</h5>
            </div>

            <div class="row">
                @foreach ($comments as $item)
                    <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->author->first_name }} <span
                                        class="mx-1">{{ $item->author->first_name }}</span></h5>
                                <div><small>{{ $item->content }}</small></div>
                                <div class="row">
                                  <div class="mx-auto">
                                  <a  href="{{route('post.show',['id'=>$item->post->id])}}" class="btn btn-primary btn-sm"> <span>Visit Post</span></a>
                                  </div>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="ml-auto mr-3"> {{ $comments->links() }}</div>
            </div>

    </div>


    </section>

    </div>
@endsection
