@include('zADMIN._wrap.text.nameTextarea', ['name' => 'вопрос'])
<div class="paragraph"></div>
<div class="_shell Article / Note -lite">
	<textarea id="tinymce_lite_1" name="sms" placeholder='текст...'>{{$sms->sms}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>

<div class="paragraphX2"></div>

<div class="_shell _name @error('h') Error @enderror / vol-Abs label-insideInput / net">
	<input id="inputH" type="text" name="h" value="{{$sms->h ?? old('h')}}" placeholder=".">
	<label class="Abs" for="inputName">@svg('plus')заголовок для вопроса</label>
	@error('h')
		<div class="Abs / Nameplate -rt">{{ $errors->first('h') }}</div>
	@enderror
</div>

@include('zADMIN._wrap.text.nameTextarea', ['name' => 'ответ'])
<div class="paragraph"></div>
<div class="_shell Article / Note -lite">
	<textarea id="tinymce_lite_2" name="answer" placeholder='текст...'>{{$sms->answer}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>
<div class="paragraph"></div>

<div class="_shell Article @error('answer_user_name') Error @enderror / vol-Abs label-insideInput">
	<input id="inputAnswerUserName" type="text" name="answer_user_name" value="{{$sms->answer_user_name ?? (auth()->user()->nickname ?? auth()->user()->name)}}" placeholder=".">
	<label class="Abs" for="inputAnswerUserName">@svg('plus')Имя под ответом</label>
	@error('answer_user_name')
		<div class="Abs / Nameplate -rt">{{ $errors->first('answer_user_name') }}</div>
	@enderror
</div>