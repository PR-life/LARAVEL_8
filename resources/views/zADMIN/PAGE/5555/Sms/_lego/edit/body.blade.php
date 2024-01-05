@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Вопрос'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="sms" placeholder='текст'>{{$sms->sms}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>

<div class="hill-s"></div>
 
@if($sms->label != 'callback')
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Ответ'])
<div class="paragraph"></div>

<div class="Article aura / face face-none face-padding">

	<div class="_shell / Note -lite">
		<textarea id="tinymce_lite_2" name="answer" placeholder='текст...'>{{$sms->answer}}</textarea>
	</div>

	<div class="paragraph net"></div>

	<div class="face face-s face-out">
		<div class="Preamble / Form -S">
			<label class="content-xs / Grey" for="id_09081301">подпись под ответом</label>
			<div class="author">
				<input id="id_09081301" class="net" id="answer_user_name" type="text" name="answer_user_name" value="{{$sms->answer_user_name ?? '6666666666666666'}}" placeholder='.'>
			</div>
		</div>
	</div>
</div>

@endif