<style>
    @media(min-width:720px) {

        .cat_show {
            display: none;
        }

    }

    @media(max-width:840px) {
        .cat_hide {
            display: none;
        }
    }

</style>
<ul class="list-group list-group-horizontal-sm cat_hide">
    <li class="list-group-item py-1 text-dark" aria-disabled="true">News Categories</li>
    @foreach ($categories as $item)
        <li class="list-group-item py-0" style="background-color: {{ $item->color }}"><a href="category/{{$item->id}}/posts"
                class="text-light">{{ $item->title }}</a></li>
    @endforeach
</ul>

<div class="row cat_show">
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
