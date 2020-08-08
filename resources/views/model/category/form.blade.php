

<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-success  btn-sm" data-toggle="modal" data-target="#exampleModalLong">
    <span class="small"> Add News Category</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> New Category</h5>
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
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="form-group input-group-sm">
                                <div>
                                    <label for="title">Category Name</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                                <div>
                                    <label for="color">Category Color</label>
                                    <input type="color" class="form-control" name="color" required>
                                    <small class="mx-3">click on color filed to select color</small>
                                </div>
                    
                                <div class="row">
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

