<div class="Article aura">

	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$category->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	@include('zADMIN._lego.form.slug.edit', ['Var' => $category->slug])

	<div class="hill-s"></div>

	@component('zADMIN._wrap.Tab.edit.body')
		@slot('nameTab1', 'Заголовки')
		@slot('nameTab3', 'Тизер')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Category.lego.edit.lego.tab_1')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.canonical', ['Var' => $category])
		@endslot
		@slot('tab_3')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Category.lego.edit.lego.teaser')
		@endslot
	@endcomponent

	<div class="hill"></div>

	<div class="_shell _h1 / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$category->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div>

	{{-- <div class="paragraph"></div> --}}
	@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Интро'])
	<div class="paragraph"></div>
	<div class="_shell Article aura / Note -lite">
		<textarea id="tinymce_lite_1" name="intro" placeholder='текст...'>{{$category->intro}}</textarea>
	</div>
	<div class="hill-s"></div>

	

	<div class="Details transparent">
		<details>
			<summary><span>text_top</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_1" name="text_top" placeholder='текст...'>{{$category->text_top}}</textarea>
			</div>
		</details>
		<details>
			<summary><span>text</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_3" name="text" placeholder='текст...'>{{$category->text}}</textarea>
			</div>
		</details>
		<details>
			<summary><span>text_bottom</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_2" name="text_bottom" placeholder='текст...'>{{$category->text_bottom}}</textarea>
			</div>
		</details>
 
		<details>
			<summary><span>knot_1</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_lite_2" name="knot_1" placeholder='текст...'>{{$category->knot_1}}</textarea>
			</div>
		</details>
	</div>





	

</div>


<div class="hill-s"></div>
 
