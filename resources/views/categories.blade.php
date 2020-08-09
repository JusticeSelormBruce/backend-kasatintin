<ul class="list-group list-group-horizontal-sm">
    @foreach ($categories as $item)
<li class="list-group-item py-0" style="background-color: {{$item->color}}"><a href="" class="text-light">{{$item->title}}</a></li>
    @endforeach
  </ul>