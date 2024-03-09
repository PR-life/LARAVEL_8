@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'sms'])
<div class="paragraph"></div>
<div class="_shell Article / Note -lite">
	<textarea id="tinymce_lite_1" name="sms" placeholder='текст...'>{{$sms->sms}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>

<div class="paragraphX2"></div>

<div class="_shell _name @error('param_1') Error @enderror / vol-Abs label-insideInput / net">
	<input id="inputParam_1" type="text" name="param_1" value="{{$sms->param_1 ?? old('param_1')}}" placeholder=".">
	<label class="Abs" for="inputName">@svg('plus')заголовок</label>
	@error('param_1')
		<div class="Abs / Nameplate -rt">{{ $errors->first('param_1') }}</div>
	@enderror
</div>

@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'answer'])
<div class="paragraph"></div>
<div class="_shell Article / Note -lite">
	<textarea id="tinymce_2" name="answer" placeholder='answer...'>{{$sms->answer}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>