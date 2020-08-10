<style>
    @media(min-width:720px){
       .h{
        height: 340px;
       }
    }
</style>
<div class="row">
    @foreach ($post->videos as $item)
        <div class="col-lg-6 col-md-6 col-sm-12">
            <video class="w-100 h" controls>
                <source src="{{ Storage::url($item->url) }}">

            </video>

        </div>
    @endforeach


</div>
