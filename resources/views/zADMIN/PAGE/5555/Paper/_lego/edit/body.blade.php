{{-- <div class="_shell / void-m index / Lang OnOff off" data-lang="">



	<div class="_shell _name / vol-Abs / net">
		<input id="name" type="text" name="name" value="Испытать прибор" placeholder=".">
		<label class="Abs" for="name"><svg><use xlink:href="#svg-plus"></use></svg>Name</label>
	</div>

	<div class="_shell _name / vol-Abs / _open">
		<input id="name_en" type="text" name="name_en" value="" placeholder=".">
		<label class="Abs" for="name"><svg><use xlink:href="#svg-plus"></use></svg>Name_en</label>
	</div>


	<div class="Abs -rt / x-langToll / _indexMax pointer" data-click="" data-css="" data-node="parent" data-toggle="on off">
    <div class="x-close / Ico -XS / noEvents / orb-s contentBox"><svg><use xlink:href="#svg-three"></use></svg></div>
    <div class="x-open none / Ico -XS / noEvents / orb-s contentBox"><svg><use xlink:href="#svg-close"></use></svg></div>
</div>
</div> --}}

<div class="Article aura">
	@component('zADMIN.PAGE._wrap.form._shell.Lang')
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$faq->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Вопрос</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	<div class="_shell _name / vol-Abs / _open">
		<input id="inputName_en" type="text" name="name_en" value="{{$faq->name_en ?? old('name_en')}}" placeholder=".">
		<label class="Abs" for="inputName_en">@svg('plus')Вопрос_en</label>
	</div>
	@endcomponent


	<div class="hill-s"></div>
	@component('zADMIN.PAGE._wrap.form._shell.Lang')
	<div class="_shell / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$faq->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок в ответе</label>
	</div>
	@endcomponent
</div>

 



<div class="paragraph"></div>
@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'текст в ответе'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="text" placeholder='текст...'>{{$faq->text}}</textarea>
</div>
<div class="hill-s"></div>
 
