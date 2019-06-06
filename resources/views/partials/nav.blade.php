@foreach($pages as $page)
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre href="{{$page->uri}}">
      {{$page->title}}
      @if(count($page->children)>0)
        <span class="caret"></span>
      @endif
    </a>
    @if(count($page->children)>0)
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      @foreach($page->children as $child)
        <a class="dropdown-item" href="{{ $child->uri }}">
          {{$child->title}}
        </a>
      @endforeach
    </div>
    @endif
  </li>
@endforeach
