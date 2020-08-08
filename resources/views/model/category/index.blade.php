    @extends('layouts.app')

    @section('content')


        <div class="container">
            <div class="row">
                <div class="ml-auto mr-3">
                    @include('model.category.form')
                </div>
            </div>
            @include('shared.alert')
            <hr>
            <section>
                <div class="alert alert-dark py-0" role="alert">
                    <h5>Available Categories</h5>
                </div>

                <div class="row">
                    @foreach ($categories as $item)
                        <div class="col-lg-4 col-md-3 col-sm-12 py-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <div class="aler py-1" role="alert" style="background-color: {{ $item->color }}">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </section>

        </div>
    @endsection
