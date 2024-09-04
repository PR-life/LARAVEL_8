<div class="Article aura">

	@component('zADMIN._wrap.form._shell.Lang', ['id' => 'nameFeature'. (class_basename($detail))])
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$detail->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	@endcomponent
	@include('zADMIN._lego.form.slug.edit', ['Var' => $detail->slug])

	<div class="hill"></div>




	@component('zADMIN._wrap.Tab.edit.body')
		@slot('nameTab1', 'name-calling')
		{{-- @slot('nameTab3', 'Медиа') --}}
		{{-- @slot('nameTab4', 'Фильтр') --}}

		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			{{-- @include('zADMIN.PAGE.Detail.lego.edit.tab_1') --}}
		@endslot
		@slot('tab_2')
			{{-- <div class="paragraphX2 / net"></div> --}}
			{{-- @include('zADMIN.PAGE.Detail.lego.edit.tab_2') --}}
		@endslot
		{{-- @slot('tab_3')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.media.index', ['Var' => $item])
		@endslot --}}
		{{-- @slot('tab_4')
			<div class="paragraph / net"></div>
			@include('zADMIN.PAGE.Item.lego.edit.lego.filter')
		@endslot --}}
	@endcomponent




 


	{{-- <div class="paragraphX2"></div>
	@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Интро'])
	<div class="paragraph"></div>
	<div class="_shell Article aura / Note -lite">
		<textarea id="tinymce_1" name="intro" placeholder='текст...'>{{$feature->intro}}</textarea>
	</div> --}}
	<div class="hill-s"></div>

	
</div>

 

