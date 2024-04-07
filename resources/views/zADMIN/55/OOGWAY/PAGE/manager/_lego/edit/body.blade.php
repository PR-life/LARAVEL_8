<div class="_shell _name / vol-Abs">
	<input id="name" type="text" name="name" value="{{$oogway->name}}" placeholder='.'>
	<label class="Abs" for="name">@svg('plus')Name</label>
	@error('name')
		<div class="Abs / Nameplate -rt">{{$message}}</div>
		{{-- <div class="Abs Valid help / none" title="обязательное поле"></div> --}}
	@enderror
</div>


<div class="paragraph"></div>

<div class="_shell / vol-Abs label-insideInput">
	<input id="oogway_id" class="content-xs" type="text" name="oogway_id" placeholder="oogway_id">
	<label class="Abs" for="email">oogway_id</label>
</div>


@component('zADMIN.OOGWAY.PAGE._wrap.tab.x4',['Var' => $oogway])
		@slot('id_menu', 'menu_manager_edit_text')
		@slot('id_package', 'Tabs_manager_edit_text')

		@slot('menu')
		<li data-item='1' data-packagetype='css' data-packagefoo='radio' package='Tabs -x1' class="active">
			<span class="a block Ellipsis / noEvents">text</span>
		</li>
		<li data-item='2' data-packagetype='css' data-packagefoo='radio' package='Tabs -x2'>
			<span class="a block Ellipsis / noEvents">text_tz</span>
		</li>
		<li data-item='3' data-packagetype='css' data-packagefoo='radio' package='Tabs -x3'>
			<span class="a block Ellipsis / noEvents">text_result</span>
		</li>
		@endslot


		@slot('tab_1')
		<div class="Article">
			@include('zADMIN._wrap.text.nameTextarea', ['name' => 'text'])
			<div class="paragraph"></div>
			<div class="_shell / Note -lite">
				<textarea id="tinymce_1" name="text" placeholder='text'>{{$oogway->text}}</textarea>
				{{-- @include('zADMIN._brick.cleanHTML') --}}
			</div>
		</div>
		@endslot

		@slot('tab_2')
		<div class="Article">
			@include('zADMIN._wrap.text.nameTextarea', ['name' => 'text_tz'])
			<div class="paragraph"></div>
			<div class="_shell / Note -lite">
				<textarea id="tinymce_2" name="text_tz" placeholder='text_result'>{{$oogway->text_tz}}</textarea>
				{{-- @include('zADMIN._brick.cleanHTML') --}}
			</div>
		</div>
		@endslot


		@slot('tab_3')
		<div class="Article">
			@include('zADMIN._wrap.text.nameTextarea', ['name' => 'text_result'])
			<div class="paragraph"></div>
			<div class="_shell / Note -lite">
				<textarea id="tinymce_3" name="text_result" placeholder='text_result'>{{$oogway->text_result}}</textarea>
				{{-- @include('zADMIN._brick.cleanHTML') --}}
			</div>
		</div>
		@endslot
@endcomponent
 