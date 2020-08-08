

<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-success  btn-sm" data-toggle="modal" data-target="#exampleModalLong">
    <span class="small"> Add Tag</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> New Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron">


                    <section>
                    
                        <hr>
                        <form action="{{route('tag.store')}}" method="POST">
                            @csrf
                            <div class="form-group input-group-sm">
                                <div>
                                    <label for="title">Tag Name</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                               
                    
                                <div class="row pt-3">
                                    <div class="mx-auto">
                                        <button type="submit" class="btn btn-primary btn-sm"> <span
                                                class="mx-3">Save</span></button>
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

