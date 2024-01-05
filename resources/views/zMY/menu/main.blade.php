<li {!!request()->routeIs('my.morda') ? 'class="active"' : ''!!}><a href="{{route('my.morda')}}">{{__('MY/menu/main.index')}}</a></li>
<li {!!request()->routeIs('my.bookmarks') ? 'class="active"' : ''!!}><a href="{{route('my.bookmarks')}}">{{__('MY/menu/main.bookmarks')}}</a></li>
<li {!!request()->routeIs('my.reviews') ? 'class="active"' : ''!!}><a href="{{route('my.reviews')}}">{{__('MY/menu/main.reviews')}}</a></li>
<li {!!request()->routeIs('my.comments') ? 'class="active"' : ''!!}><a href="{{route('my.comments')}}">{{__('MY/menu/main.comments')}}</a></li>
<li class="gstrm"></li>
