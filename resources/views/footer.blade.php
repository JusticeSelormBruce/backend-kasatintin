<style>
    .border-design{
        border-left: 1px solid white; 
        border-right: 1px solid white; 
      
    }
</style>
<div class="container">
  <footer>
    <div class="jumbotron py-3 bg-dark  border-design">
      <div class="row">
     
        <a class="navbar-brand pl-5" href="{{ url('/') }}">
          <img src="{{ asset('logo/Kasatintin2.jpg') }}" alt="" class="img-thumbnail" width="100">
         
      </a>
      <div class="pt-2">
      
        <ul class="list-group list-group-horizontal-sm  mx-1">
            <li class="list-group-item py-1 text-dark" aria-disabled="true">News Categories</li>
            @foreach ($categories as $item)
                <li class="list-group-item py-0" style="background-color: {{ $item->color }}"><a href="category/{{$item->id}}/posts"
                        class="text-light">{{ $item->title }}</a></li>
            @endforeach
        </ul>
        
    </div>
     
      </div>
      <div class="row">
      
          <div class="mx-auto ">
            @include('policy')
            <span class="mx-3"></span>
            <span class="py-1 px-2 round">copyright: kasatintin({{  $year }})</span>
           <hr>
          </div>
      </div>
     
    </div>
  
  
  </footer>
</div>