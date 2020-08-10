<style>
    textarea {
        border: 1px solid white !important;
        background-color: rgb(62, 65, 65);
    }

</style>
<div class="jumbotron bg-dark py-0  ml-lg-5 ml-md-5 ml-sm-0">
    <form action="/post_comment" method="POST">
        @csrf
        <div class="form-group py-0">
            <input type="hidden" name="id" value="{{$post->id}}">
            <small>Comment here:</small>
            <textarea name="comment" required id="" rows="6" class="w-100 rounded"></textarea>
         <hr>
            <button class="btn btn-primary btn-sm" type="submit"><span class="mx-3">Post Comment</span></button>
        </div>
     
    </form>

</div>
