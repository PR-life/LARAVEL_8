<div class="flex / -Sms -bar / relative {{$css ?? 'Edge -flaber'}}" check-localstorage={{$id}} data-check="off">
    <div class="W-100 / edge-flaber / {{$cssWrapLeft ?? ''}}">
        {!!$slot!!}
    </div>

    @component('_wrap.Flaber.index')
        @slot('id', $id)
        @slot('data', "data-click data-css data-node='parent' data-toggle='off' data-localStorage localStorage-id")
        
        <div class="HWin / sms-off" data-stopClick></div>
    
        <div class="Plot sms-plot / flex dC cI / sms-hidden" data-stopClick>
            <div class="Bee"></div>
            <div class="Ico / pointer" data-click data-goto={{$id}} data-foo='click'>
                @svg('info')
            </div>
        </div>
        
        <div class="SMS -bar / relative" data-stopClick>
            <div class="Wings">
                <div class="_win -t pr-3">
                    <div class="sms-design sms-off / Plot">
                        <div class="flex eC">
                            <div class="Close -an -black round" data-click data-goto={{$id}} data-foo='click'></div>
                        </div>
                        {!!$slotSms ?? ''!!}
                    </div>  
                    <div class="Bar -tool / sms-on"></div>
                </div>
            </div>
        </div>


    @endcomponent
</div>
