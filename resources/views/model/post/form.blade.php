<!-- Button trigger modal -->
<button type="button" class="btn text-white bg-dark  btn-sm" data-toggle="modal" data-target="#exampleModalLong">
    <span class="small mx-5"> Add Post</span>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="jumbotron">


                    <section>

                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group input-group-sm">
                              <div>
                                  <label for=""></label>
                                <select name="post_type" required class="form-control">
                                    <option value="">Select Content Type</option>
                                    <option value="Video">Video</option>
                                    <option value="Image">Image</option>
                                    <option value="Video/Image">Video/Image</option>
                                </select>
                              </div>
                               <div>
                                   <label for=""></label>
                                <select name="categories_id" required class="form-control">
                                    <option value="">select category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}" style="background-color:{{ $item->color }}">
                                          <b>  {{$item->title}}</b>
                                        </option>

                                    @endforeach
                                </select>
                               </div>
                                <div>
                                    <label for="title" class="ml-2">title</label>
                                    <input type="text" class="form-control " name="title" required>
                                </div>
                                <div class="pb-2">
                                    <label for="content" class="ml-2">content</label>
                                    <textarea name="content" id="" cols="30" rows="7" required
                                        class="form-control  "></textarea>
                                </div>
                                <div class="card shadow-lg">
                                    <div class="row">
                                        @foreach ($tags as $item)
                                        <div class="col-lg-3 col-md-3 col-sm-6">
                                            <input type="checkbox" name="tag_id[]" value="{{$item->id}}"
                                            class="mx-1 py-2">
                                           <span>{{$item->title}}</span>
                                        </div>
                                       
                                        @endforeach
                                    </div>
                                   
                                </div>
                             <div class="pt-2">
                                <input type="file" multiple name="url[]">
                             </div>

                                <div class="row pt-2">
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

