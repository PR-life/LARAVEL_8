<div class="_row OnOff net" data-click data-css data-toggle='on'>
    <div class="flex">
        <div class="_1 _cell / flex cI / Min Max -w2 / relative">
           <div class="Ico -S"> @svg({!!$status!!})</div> <span class="ml-2 content-xxs Grey">{{$type ?? 'смс'}}</span>
            @isset($info)
            <div class="Abs -left / space-rightS">
                <div class="Ico -S">@svg('plus')</div>
            </div>
            @endisset
            @isset($tz)
            <div class="Abs -left / space-rightS">
                <div class="Ico -S">@svg('info')</div>
            </div>
            @endisset
        </div>
        <div class="_2 _cell / W-100"><span class="content-s">{{$name}}</span></div>
        <div class="_3 _cell / Min Max -w2 / right-text"><span class="content-s / Grey">{{$date}}</span></div>
    </div>
    
    @isset($info)
    <div class="hMin _Open _bg / space center-text">
        {!!$info!!}
    </div>
    @endisset
    @isset($tz)
    <div class="hMin _Open _bg / space center-text">
        {!!$tz!!}
    </div>
    @endisset
</div>