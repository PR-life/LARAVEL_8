<div class="Article aura">

	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$product->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>

	@include('zADMIN._lego.form.slug.edit', ['Var' => $product->slug])

	<div class="hill-s"></div>

	@component('zADMIN._wrap.Tab.edit.body')
		@slot('nameTab1', 'Заголовки')
		@slot('nameTab3', 'Тизер')
		@slot('nameTab4', 'Медиа')
		@slot('nameTab5', 'Фильтр')

		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Product.lego.edit.lego.names')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.canonical_ru', ['Var' => $product])
		@endslot
		@slot('tab_3')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Product.lego.edit.lego.teaser')
		@endslot
		@slot('tab_4')
			@include('zADMIN.PAGE._lego.edit.media.index', ['Var' => $product])
		@endslot
		@slot('tab_5')
			<div class="paragraph / net"></div>
			@include('zADMIN.PAGE.Product.lego.edit.lego.filter')
		@endslot
	@endcomponent

	<div class="hill"></div>

	<div class="_shell _h1 / vol-Abs label-insideInput / net">
		<input id="inputH1" type="text" name="h1" value="{{$product->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div>
</div>

 
 

<div class="paragraph"></div>
@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Intro'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="intro" placeholder='текст...'>{{$product->intro}}</textarea>
	{{-- @include('zADMIN._brick.cleanHTML') --}}
</div>


@if($product->mockup != 'link')
<div class="paragraph"></div>
@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Статья'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_1" name="article" placeholder='текст...'>{{$product->article}}</textarea>
</div>
<div class="hill-s"></div>

<div class="Details transparent">
	<details>
		<summary><span>text_global</span><i></i></summary>
		<div class="_shell Article aura / Note -lite">
			<textarea id="tinymce_2" name="text_global" placeholder='текст...'>{{$product->text_global}}</textarea>
		</div>
	</details>
	<details>
		<summary><span>text_global_supporting</span><i></i></summary>
		<div class="_shell Article aura / Note -lite">
			<textarea id="tinymce_3" name="text_global_supporting" placeholder='текст...'>{{$product->text_global_supporting}}</textarea>
		</div>
	</details>
</div>
 

<div class="hill"></div>







@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Note'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_2" name="note" placeholder='note...'>{{$product->note}}</textarea>
</div>
@endif
 