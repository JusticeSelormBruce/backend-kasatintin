@extends('layouts.app')
@section('content')


<div class="container">
    @include('shared.alert')    
        <form action="/store-poll" method="POST">
            @csrf
            <div class="form-group input-group-sm text-light">
                <div class="row">
                    <label for="">Title</label>
                    <input type="text" name="title" required class="form-control" value="Kasatintin Polls" readonly>
                </div>
                <div class="row">
                    <label for="">Content</label>
                    <textarea name="description" id="" cols="30" rows="2" class="form-control" required></textarea>
                </div>

                <div class="row">
                    <label for="">Options</label>
                    <textarea name="selection" id="" cols="30" rows="2" class="form-control" required></textarea>
                    <small class="text-danger">Sepreate options with comma(,) eg,(yes, no, maybe, none)</small>
                </div>
                <div class="row">
                    <div class="mx-auto">
                        <button class="btn btn-primary btn-sm"> <span class="mx-2">Submit</span></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
