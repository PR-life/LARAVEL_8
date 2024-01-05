<div class="Opportunities {{$js_id_event ?? 'Start'}} / {{$css ?? 'HWin / -White White -bg'}} / relative">
 
<div class="Abs -all / Scroll_mbl"> 
    <div class="_scr / H-100 / flex dC / index">

        <div class="_head / _indexMax relative">
            @include('zJJ.mod.Opportunities._lego._head')
        </div>

        <div class="_body / H-100_PC relative">
            <div class="Scroll_PC">
                <div id="scr_25121053" class="_scr">
                    @include('zJJ.mod.Opportunities._lego._body')
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@push('js-bottom-solo')
@include('zJJ.mod.Opportunities.src.js', ['id' => $js_id_event])
@endpush
@push('style')
@include('zJJ.mod.Opportunities.src.css')
@endpush