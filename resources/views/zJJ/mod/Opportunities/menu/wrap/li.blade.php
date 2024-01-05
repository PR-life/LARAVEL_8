<li id="{{$id}}" class="yesEvents" data-item='{{$i}}' data-packagefoo='radio' data-packagetype='css' package='{{$css}}'>
    {{-- <span class="a flex cI cC center-text / noEvents / Min -w80 / center-text / space-l block">все <br>возможности</span> --}}
    <span class="a flex cI_PC bC_mbl dC_mbl / Hgr_mbl -V -wagon / Bg -samolet x-none_beforePC / space space-m_PC cross-xxs round index / noEvents">
        {!!$slot!!}
        <span class="_text flex dC_PC dCR_mbl">
            <span class="555">{!!$name!!}</span>
            <span class="555 content-s / Grey">{!!$description!!}</span>
        </span>
    </span>
</li>