

<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-success  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
    <span class="small"> Edit Category</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}"> New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron">


                    <section>
                        <div class="alert alert-dark py-0" role="alert">
                            <h5>
                                News Categories
                            </h5>
                        </div>
                        <hr>
                        <form action="/edit-category" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group input-group-sm">
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <div>
                                    <label for="title">Category Name</label>
                                    <input type="text" class="form-control" name="title" required value="{{$item->title}}">
                                </div>
                                <div>
                                    <label for="color">Category Color</label>
                                    <input type="color" class="form-control" name="color" required value="{{$item->color}}">
                                    <small class="mx-3">click on color filed to select color</small>
                                </div>
                    
                                <div class="row">
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

