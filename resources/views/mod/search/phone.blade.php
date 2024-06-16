<div>
    <form class="Form vol-go vol-phone {{$cssForm ?? '-L / flex / space-s round-s'}}" action="{{$action}}" method="get" target="_self" accept-charset="utf-8">
        {{-- <input type="hidden" name="searchid" value="{{$yID}}"> --}}
        <input id="input_{{$id_input ?? '2320114'}}" class="_search -M tel" type="search" name="phone" value="{{$_GET['phone'] ?? ''}}" placeholder="{{$placeholder ?? '+7 (___) ___ ____'}}">
        <button class="Btn cC -S vol-go" type="submit" aria-label='поиск' style="background: #3B9DFB">
            <span class="Ico -S none_PC">@svg('search')</span>
            <span class="none_mbl">{{$btnName ?? 'Найти'}}</span>
        </button>
    </form>
</div>
