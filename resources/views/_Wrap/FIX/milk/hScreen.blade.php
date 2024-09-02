@component('_Wrap.FIX.wrap.FIX_on',['id' => $id, 'css_26071457' => $css_to_FIX ?? null])
<div class="fix -spaceTopMbl -edge / {{$fix_css ?? ''}}" data-close>
    <div class="_fix -hScreen {{$_fix_css ?? '-round_mbl fix-bg555 -bgOut'}} / relative index">
        @include('_brick.Close.index', ['css19082244' => '', 'css12061513' => '-L -black -an -scroll'])
        <div class="Abs -all {{$cssWrapAbs ?? ''}} {{$cssWrap ?? 'bg-pop -round_PC / Jolt -t / hidden'}} / _indexMin Index">
            {!!$slot!!}
        </div>
     </div>
</div>
@endcomponent
