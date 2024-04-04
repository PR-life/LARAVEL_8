<div id="{{$id ?? 'tabOogway'}}" class="Tabs " localstorage-controlCss addcss='-x' param-id='tabsOogway'>
 
    <div class="_shell / _tab x1">
        @component('zADMIN._wrap.index')
        {{$tab_1 ?? ''}}
        @endcomponent
    </div>
    <div class="_shell / _tab x2">
        <div class="hill-s"></div>
        @component('zADMIN._wrap.index')
        {{$tab_2 ?? ''}}
        @endcomponent
    </div>
    <div class="_shell / _tab x3">
        @component('zADMIN._wrap.index')
        {{$tab_3 ?? ''}}
            {{-- <h1>x3</h1> --}}
        @endcomponent
    </div>
    <div class="_shell / _tab x4">
        @component('zADMIN._wrap.index')
        {{$tab_4 ?? ''}}
            {{-- <h1>x4</h1> --}}
        @endcomponent
    </div>
</div>