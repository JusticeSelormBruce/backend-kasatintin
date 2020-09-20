<style>
    .user_avatr {
        width: 50px;
    }

    .b {
        border-left: 1px solid blue !important;
    }
   

</style>
@extends('layouts.home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                @include('youtube')
              <div class=" w-100">  @include('recomendation')</div>
              </div>
            <div class="col-lg-8 col-md-8  col-sm-12">
               @include('left')
               </div>
           

            
        </div>
    </div>
@endsection
