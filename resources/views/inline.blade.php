<?php
$inline = $post
->with('images')
->get()
->random(2); ?>

<div class="row">
    @foreach ($inline as $item)
        <div class="col-6">
            <a href="/post_show/{{ $item->id }}"> <img src="{{ $item->images[0]->url }}" alt="read also"></a>
        </div>
    @endforeach
</div>
