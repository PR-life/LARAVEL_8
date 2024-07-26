{{-- <div class="Q -M loop-{{$loop->index + 1}} / face face-padding face-top" data-click data-css data-toggle='On'>
    <div class="_wrap relative">
        <div class="content-m / Void / lineClamp var-3 owl-lineClamp / pointer">
            {!!$_sms->sms!!}
        </div>
        <div class="Wings net / noEvents">
            <div class="_win">
                <div class="content-s Grey / right-text">{{$_sms->dateAsCarbon->diffForHumans()}}</div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="Q  / face face-padding face-top" data-click data-css data-toggle='On'>
    <div class="_wrap / relative">
        <div class="content / Void / lineClamp var-3 owl-lineClamp / pointer">
            
        </div>
    </div>
    <div class="Preamble -row -S">
        <div class="content-s / Grey">аноним</div>
    </div>
</div> --}}



@component('_wrap.Q.index', ['Var' => $Var, 'x_loop' => $loop->index + 1])
{!!$Var->sms!!}
@endcomponent


 