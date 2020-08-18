

<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-success  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
    <span class="small"> Edit Tag</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitl{{$item->id}}e" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}"> Edit Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron">


                    <section>
                    
                        <hr>
                        <form action="/edit-tag" method="POST">
                            @method("patch")
                            @csrf
                            <div class="form-group input-group-sm">
                                <input class="form-control" type="hidden" name="id" value="{{$item->id}}">
                                <div>
                                    <label for="title">Tag Name</label>
                                    <input type="text" class="form-control" name="title" required value="{{$item->title}}">
                                </div>
                               
                    
                                <div class="row pt-3">
                                    <div class="mx-auto">
                                        <button type="submit" class="btn btn-primary btn-sm"> <span
                                                class="mx-3">Update</span></button>
                                    </div>
                                </div>
                    
                            </div>
                        </form>
                    </section>


                </div>
            </div>

        </div>
    </div>
</div>

