@component('_wrap.A.index', ['Var' => $Var, 'x_loop' => $loop->index + 1])
    @slot('css26071859', '-S')
    {{-- @slot('content26071858', '-lineHeight') --}}
    {{-- @slot('face26071858', 'face face-xs face-padding face-bottom') --}}
    {!!$Var->answer!!}
@endcomponent

{{-- <div class="A" data-click data-css data-toggle='On'>
    <div class="_wrap -tail / relative">
        <div class="content-m -lineHeight / Void / lineClamp var-2 owl-lineClamp">
            {!!$Var->answer!!}
        </div>
        <div class="Abs tail">@svg('tail')</div>
    </div>
    <div class="Preamble -row -S / right">
        <div class="content-s Grey">{{$_sms->answer_user_name}}</div>
    </div>
</div> --}}