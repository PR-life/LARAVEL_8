<?
$errorBag ?? $errorBag = 'newSms';
?>

<div class="_shell {{$css ?? ''}} {!!isset($label) ? 'vol-Abs placeholder-none' : ''!!} @error('phone',$errorBag) Error @enderror">
	@include('_._brick.text.input', [
		'Form' => $Form ?? 'Demo',
		'Var' => 'phone',
		'type' => 'tel',
		'value' => old('phone'),
		'placeholder' => 'phone...',
		// 'jsvalidate' => 'email',
		'css' => $cssInput ?? null,
		'required' => $required ?? false,
		])

	@if(isset($label))
		<label class="Abs Grey" for="phone">{!!$label!!}</label>
	@endif

	@error('phone',$errorBag)
		<div class="Abs / Nameplate -rt / familySamolet / _anime">{{$errors->$errorBag->first('phone') }}</div>
	@enderror

	{{-- @if(isset($required))
	<div class="Abs Valid help / none" title="обязательное поле"></div>
	@endif --}}
</div>



{{-- 
/home/v/velichs9/93.velkom.pro/resources/views/component/Form/_wrap/input.blade.php

<div id="{{$shell_id ?? ''}}" class="_shell / vol-Abs {{$css ?? ''}} {{$placeholder ?? 'placeholder-none'}}">
    <input id="{{$Var_id ?? ''}}" class="@error($Var, $requestName ?? 'newSms') Error @enderror" type="text" name="{{$Var}}" value="{{$value ?? old($Var)}}" placeholder='{{$placeholder ?? '.'}}' {!!$data ?? ''!!}>
    @if($label ?? true)
        <label class="Abs nowrap Ellipsis" for="{{$Var_id}}">{!!$slot!!}</label>
    @endisset
    @error($Var, $requestName ?? 'newSms')
        <div class="Abs / Nameplate -rt">{{ $errors->newSms->first($Var) }}</div>
    @enderror
    <div class="x-Error"></div>
</div> --}}
