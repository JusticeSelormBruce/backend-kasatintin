<style>
    img{
        width: 40px;
        height: 40px;
        border-radius: 50px!important
    }
</style>
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <h5>All Users</h5>
        <div class="ml-auto mx-5">
            {{$users->links()}}
        </div>
    </div>
  
    <hr>
  
    <div class="row">
        @foreach ($users as $item)
        <div class="col-lg-3 col-md-4 col-sm-12 py-1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> <img src="{{$item->avatar}}" alt="user_avatr" class="rounded"></h5>
                    <div class="py-1">
                        {{$item->first_name}} <span class="mr-1"></span> {{$item->last_name}}
                    </div>
                   <div class="card-footer">
                   </div>
                </div>
            </div>
        </div>
            
        @endforeach
    </div>
</div>
    
@endsection