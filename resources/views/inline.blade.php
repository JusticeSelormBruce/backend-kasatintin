<?php
if($post
->with('images')->count() ==  1){
    $inline = $post
->with('images')
->get()
->random(1);
}
else{
    $inline = $post
->with('images')
->get()
->random(2);
}


 ?>
 
 <h6 class="text-warning">other related stories</h6>
<div class="row">
  
        <div class="col-6">
            <a href="/post_show/{{  $inline[0]->id }}"> <img src="{{ Storage::url($inline[0]->images[0]->url) }}" height="100" class="w-100 img-thumbnail" alt="read also"></a>
        </div>
        <div class="col-6">
            <a href="/post_show/{{  $inline[0]->id }}"> <img src="{{ Storage::url($inline[0]->images[0]->url) }}" height="100" class="w-100  img-thumbnail" alt="read also"></a>
        </div>
       
  
</div>
