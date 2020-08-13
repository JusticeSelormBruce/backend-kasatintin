

<!-- Button trigger modal -->
<button type="button" class="btn bg-success text-light  btn-sm" data-toggle="modal" data-target="#exampleModalLong{{$item->id}}">
    <span class="small "> message</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle{{$item->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle{{$item->id}}"> <span class="text-dark">message</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron bg-dark">


                  <p>{{$item->message}}</p>

                </div>
            </div>

        </div>
    </div>
</div>

