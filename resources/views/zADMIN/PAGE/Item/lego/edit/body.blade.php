<div class="Article aura">

	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$item->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>

	@include('zADMIN._lego.form.slug.edit', ['Var' => $item->slug])

	<div class="hill-s"></div>

	@component('zADMIN._wrap.Tab.edit.body')
		@slot('nameTab1', 'name-calling')
		@slot('nameTab3', 'Медиа')
		@slot('nameTab4', 'Фильтр')

		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Item.lego.edit.lego.teaser')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.canonical_ru', ['Var' => $item])
		@endslot
		@slot('tab_3')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.media.index', ['Var' => $item])
		@endslot
		@slot('tab_4')
			<div class="paragraph / net"></div>
			@include('zADMIN.PAGE.Item.lego.edit.lego.filter')
		@endslot
	@endcomponent

	<div class="hill"></div>

	<div class="_shell _h1 / vol-Abs label-insideInput / net">
		<input id="inputH1" type="text" name="h1" value="{{$item->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div>
</div>

 
 

<div class="paragraph"></div>
@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Intro'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="intro" placeholder='текст...'>{{$item->intro}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>


@if($item->mockup != 'link')
<div class="paragraph"></div>
@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Статья'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_1" name="article" placeholder='текст...'>{{$item->article}}</textarea>
</div>
<div class="hill-s"></div>

<div class="Details transparent">
	<details>
		<summary><span>details_1</span><i></i></summary>
		<div class="_shell Article aura / Note -lite">
			<textarea id="tinymce_2" name="details_1" placeholder='текст...'>{{$item->details_1}}</textarea>
		</div>
	</details>
	<details>
		<summary><span>details_2</span><i></i></summary>
		<div class="_shell Article aura / Note -lite">
			<textarea id="tinymce_3" name="details_2" placeholder='текст...'>{{$item->details_2}}</textarea>
		</div>
	</details>
</div>
 

<div class="hill"></div>







@include('zADMIN._wrap.text.nameTextarea', ['name' => 'knot_1'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_2" name="knot_1" placeholder='knot...'>{{$item->knot_1}}</textarea>
</div>
@endif
 