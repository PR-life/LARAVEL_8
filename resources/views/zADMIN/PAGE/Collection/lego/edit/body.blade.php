<div class="Article aura">

	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$collection->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	@include('zADMIN._lego.form.slug.edit', ['Var' => $collection->slug])

	<div class="hill-s"></div>

	@component('zADMIN._wrap.Tab.edit.body')
		@slot('nameTab1', 'Заголовки')
		@slot('nameTab3', 'Тизер')
		@slot('nameTab4', 'Медиа')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Category.lego.edit.lego.tab_1')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.canonical_ru', ['Var' => $collection])
		@endslot
		@slot('tab_3')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Category.lego.edit.lego.teaser')
		@endslot
		@slot('tab_4')
			@include('zADMIN.PAGE._lego.edit.media.index', ['Var' => $collection])
		@endslot
	@endcomponent

	<div class="hill"></div>

	<div class="_shell _h1 / vol-Abs / net">
		<input id="inputH1" type="text" name="h1" value="{{$collection->h1 ?? old('h1')}}" placeholder=".">
		<label class="Abs" for="inputH1">@svg('plus')Заголовок h1</label>
	</div>

	{{-- <div class="paragraph"></div> --}}
	@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Интро'])
	<div class="paragraph"></div>
	<div class="_shell Article aura / Note -lite">
		<textarea id="tinymce_lite_1" name="intro" placeholder='текст...'>{{$collection->intro}}</textarea>
	</div>
	<div class="hill-s"></div>

	

	<div class="Details transparent">
		<details>
			<summary><span>text_global</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_1" name="text_global" placeholder='текст...'>{{$collection->text_global}}</textarea>
			</div>
		</details>
		<details>
			<summary><span>text_global_supporting</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea name="text_global_supporting" placeholder='текст...'>{{$collection->text_global_supporting}}</textarea>
			</div>
		</details>
		<details>
			<summary><span>text</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_3" name="text" placeholder='текст...'>{{$collection->text}}</textarea>
			</div>
		</details>
		<details>
			<summary><span>text_top</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_2" name="text_top" placeholder='текст...'>{{$collection->text_top}}</textarea>
			</div>
		</details>
		<details>
			<summary><span>text_bottom</span><i></i></summary>
			<div class="_shell Article aura / Note -lite">
				<textarea id="tinymce_5" name="text_bottom" placeholder='текст...'>{{$collection->text_bottom}}</textarea>
			</div>
		</details>
 
	</div>


	<div class="paragraph"></div>
	@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Note'])
	<div class="paragraph"></div>
	<div class="_shell Article aura / Note -lite">
		<textarea id="tinymce_lite_2" name="knonotet_1" placeholder='текст...'>{{$collection->note}}</textarea>
	</div>

 
	

</div>


<div class="hill-s"></div>
 
