<style>
   

</style>
<div class="container">
    <ul class="list-group list-group-horizontal-sm cat_hide">
        <li class="list-group-item py-1 text-dark" aria-disabled="true">News Categories</li>
        @foreach ($categories as $item)
            <li class="list-group-item py-0" style="background-color: {{ $item->color }}"><a href="category/{{$item->id}}/posts"
                    class="text-light">{{ $item->title }}</a></li>
        @endforeach
    </ul>
    
</div>
<div class="row cat_show">
 
        <div class="row ">
            <div class="col-2 mr-2"> @guest
                <a class="dropdown-item text-light" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                @else
                <a class="dropdown-item text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            @endguest
         </div>
            <div class="col-3">  <a href="https://web.facebook.com/Kasatintincom-329606714086874/"><img
                src="{{ asset('icons/facebook.png') }}" alt="" class="icon ml-2"></a></div>
            <div class="col-3">  <a href="https://www.instagram.com/kasatintin_tv/"><img
                src="{{ asset('icons/instagram-sketched.png') }}" alt="" class="icon mx-2 "></a></div>
            <div class="col-3">
                <a href="https://www.youtube.com/watch?v=x1-I3ebH-0E"><img
                        src="{{ asset('icons/youtube.png') }}" alt="" class="icon"></a></div>
        </div>
       
        <hr>
      
      


    <div class="ml-auto mx-2">
        <li class="nav-item dropdown" style="list-style: none">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" v-pre>
                News Categories<span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                @foreach ($categories as $item)
                    <a class="dropdown-item" href="/category/{{$item->id}}/posts"
                        style="background-color: {{ $item->color }}">
                        {{ $item->title }}
                    </a>
                @endforeach
            </div>
        </li>
    </div>
</div>
