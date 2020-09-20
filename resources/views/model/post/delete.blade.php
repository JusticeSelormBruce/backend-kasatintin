<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-danger  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
    <span class="small mx-5"> Delete Post</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}"> Delete Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron">

                    <div class="modal-body" style="font-size: small!important;">
                        <div class=" py-3">
                           <div class="row">
                               <div class="col-12">
                                   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                       <div class="row">
                                           <div class="mx-auto">
                                               <a href="{{route('post.delete',['id'=>$item->id])}}" style="text-decoration: none!important;color: white">Delete</a>
                                           </div>
                                       </div>
        
                                   </div>
                               </div>
                           </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>

