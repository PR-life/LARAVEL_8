<form class="Form vol-search {{$css24101704 ?? '-S'}} / relative" action="{{$action}}" method="get" target="_self" accept-charset="utf-8">
    <input type="hidden" name="searchid" value="{{$yID}}">
    <input id="input_{{$id_input ?? '24101704'}}" class="_search" type="search" name="text" value="{{$_GET['text'] ?? ''}}" placeholder="{{$placeholder ?? 'поиск'}}">
    <span class="Abs -lt -b / flex cI / pl-2 noEvents">@svg('search')</span>
</form>