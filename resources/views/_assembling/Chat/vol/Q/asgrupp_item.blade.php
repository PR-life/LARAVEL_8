@component('_wrap.Q.index', ['Var' => $Var, 'x_loop' => $loop->index + 1])
    @slot('css26071858', '-S')
    @slot('content26071858', '-lineHeight')
    @slot('face26071858', 'face face-xs face-padding face-bottom')
    {!!$Var->sms!!}
@endcomponent

{{-- 
<div class="Q -S loop-1 / face face-xs face-padding face-bottom" data-click data-css data-toggle='On'>
    <div class="_wrap / relative">
        <div class="content / Void / lineClamp var-3 owl-lineClamp / pointer" itemprop="text">
            <p>Здравствуйте, я купил баллон углекислотный с плоским дном новый, возможна ли замена на заправленный баллон с плоским дном в относительно новом состоянии?</p>
        </div>
    </div>
</div> --}}