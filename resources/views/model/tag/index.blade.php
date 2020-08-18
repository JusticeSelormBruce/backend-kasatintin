@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="ml-auto mr-3">
                @include('model.tag.form')
            </div>
        </div>
        @include('shared.alert')
        <hr>
        <section>
            <div class="alert alert-dark py-0" role="alert">
                <h5>Available Tags</h5>
            </div>

            <div class="row">
                @foreach ($tags as $item)
                    <div class="col-lg-4 col-md-3 col-sm-12 py-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="ml-auto mx-2">@include('model.tag.edit')</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                @endforeach
            </div>
          <div class="row">
              <div class="ml-auto mr-3">  {{$tags->links()}}</div>
          </div>


        </section>

    </div>
@endsection
