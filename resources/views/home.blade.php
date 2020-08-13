@extends('layouts.app')

@section('content')
<div class="row">
    <div class="mx-auto"><h1>Dashboard</h1></div>
</div>

<div class="design">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 pt-2">
            <table  id="table_id" class="table text-light">
                <thead>
                    <tr>
                        <th>date</th>
                        <th>email</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>message</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emails as $item)
                    <tr>
                        <td>{{$item->created_at->format('D,M,Y')}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->fname }} <span class="mx-1"></span> {{ $item->lname}}</td>
                        <td>{{$item->phone}}</td>
                        <td>@include('message')</td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
    
        <div class="container bg-dark">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
                    <div class="jumbotron  py-1">
                        <div class="card-body">
                            <h5 class="card-title">Categories     <span class="badge badge-danger">{{$categorie}}</span></h5>
                         
                        </div>
                        <div class="card-footer"> Links: <a class="text-primary" href="{{ route('categories.index') }}">
                            {{ __('Categories') }}
                        </a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
                    <div class="jumbotron  py-1">
                        <div class="card-body">
                            <h5 class="card-title">Posts  <span class="badge badge-danger">{{$post}}</span></h5>
                          
                        </div>
                        <div class="card-footer">Links:  <a class="text-primary" href="{{ route('posts.index') }}">
                            {{ __('Post') }}
                        </a></div>
                    </div>
                </div>
        
              
        
        
            </div>
        </div>
        <div class="container bg-dark   ">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
                    <div class="jumbotron py-1">
                        <div class="card-body">
                            <h5 class="card-title">Users  <span class="badge badge-danger">{{$users}}</span></h5>
                          
                        </div>
                        <div class="card-footer">Links:    <a class="text-primary" href="{{ route('users.index') }}">
                            {{ __('Users') }}
                        </a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
                    <div class="jumbotron  py-1">
                        <div class="card-body">
                            <h5 class="card-title">Tags  <span class="badge badge-danger">{{$tags}}</span></h5>
                          
                        </div>
                        <div class="card-footer"> Links:  <a class="text-primary" href="{{ route('tags.index') }}">
                            {{ __('Tags') }}
                        </a></div>
                    </div>
                </div>
        
        
            </div>
        </div>
        <div class="container bg-dark   ">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
                    <div class="jumbotron py-1">
                        <div class="card-body">
                            <h5 class="card-title">Subscribers  <span class="badge badge-danger">{{$subscribers}}</span></h5>
                        </div>
                        <div class="card-footer">Links:    <a class="text-primary"  disabled>
                            {{ __('Subscribers') }}
                        </a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-sm-12 py-2">
                    <div class="jumbotron  py-1">
                        <div class="card-body">
                            <h5 class="card-title">Emails  <span class="badge badge-danger">{{$emails->count()}}</span></h5>
                        
                        </div>
                        <div class="card-footer"> Links:  <a class="text-primary" href="{{ route('tags.index') }}">
                                Emails                        </a></div>
                    </div>
                </div>
        
        
            </div>
        </div>
    </div>
    </div>
</div>


@endsection
