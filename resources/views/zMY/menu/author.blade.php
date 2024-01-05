<li {!!request()->routeIs('my.paper') ? 'class="active"' : ''!!}><a href="{{route('my.paper')}}">{{__('MY/menu/main.paper')}}</a></li>
<li {!!request()->routeIs('my.course') ? 'class="active"' : ''!!}><a href="{{route('my.course')}}">{{__('MY/menu/main.course')}}</a></li>
<li {!!request()->routeIs('my.author_comments') ? 'class="active"' : ''!!}><a href="{{route('my.author_comments')}}">{{__('MY/menu/main.author_comments')}}</a></li>
{{-- <li {!!request()->routeIs('my.55555') ? 'class="active"' : ''!!}><a href="{{route('my.morda')}}">{{__('MY/menu/main.comments')}}</a></li> --}}
<li class="gstrm"></li>
