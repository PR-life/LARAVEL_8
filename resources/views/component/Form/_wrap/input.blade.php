<div id="{{$shell_id ?? ''}}" class="_shell / vol-Abs {{$css ?? ''}} {{$placeholder ?? 'placeholder-none'}}">
    <input id="{{$Var_id ?? ''}}" class="@error($Var, $requestName ?? 'newSms') Error @enderror" type="text" name="{{$Var}}" value="{{$value ?? old($Var)}}" placeholder='{{$placeholder ?? '.'}}' {!!$data ?? ''!!}>
    @if($label ?? true)
        <label class="Abs nowrap Ellipsis" for="{{$Var_id}}">{!!$slot!!}</label>
    @endisset
    @error($Var, $requestName ?? 'newSms')
        <div class="Abs / Nameplate -rt">{{ $errors->newSms->first($Var) }}</div>
    @enderror
    <div class="x-Error"></div>
</div>
