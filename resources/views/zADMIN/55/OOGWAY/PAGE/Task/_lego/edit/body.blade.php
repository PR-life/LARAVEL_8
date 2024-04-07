<div class="_shell _name / vol-Abs">
	<input id="name" type="text" name="name" value="{{$task->name}}" placeholder='.'>
	<label class="Abs" for="name">@svg('plus')Name</label>
	@error('name')
		<div class="Abs / Nameplate -rt">{{$message}}</div>
		{{-- <div class="Abs Valid help / none" title="обязательное поле"></div> --}}
	@enderror
</div>


<div class="paragraph"></div>

<div class="_shell / vol-Abs label-insideInput">
	<input id="oogway_id" class="content-xs" type="text" name="oogway_id" value="{{$task->oogway_id}}" placeholder=".">
	<label class="Abs" for="email">oogway_id</label>
</div>


<div class="paragraph"></div>





@component('zADMIN.OOGWAY.PAGE._wrap.tab.x4',['Var' => $task])
		@slot('id_menu', 'menu_task_edit_text')
		@slot('id_package', 'Tabs_task_edit_text')

		@slot('menu')
		<li data-item='1' data-packagetype='css' data-packagefoo='radio' package='Tabs -x1' class="active">
			<span class="a block Ellipsis / noEvents">text_prev</span>
		</li>
		<li data-item='2' data-packagetype='css' data-packagefoo='radio' package='Tabs -x2'>
			<span class="a block Ellipsis / noEvents">text_fix</span>
		</li>
		{{-- <li data-item='3' data-packagetype='css' data-packagefoo='radio' package='Tabs -x3'>
			<span class="a block Ellipsis / noEvents">text_result</span>
		</li> --}}
		@endslot


		@slot('tab_1')
		<div class="Article">
			@include('zADMIN._wrap.text.nameTextarea', ['name' => 'text_prev'])
			<div class="paragraph"></div>
			<div class="_shell / Note -lite">
				<textarea id="tinymce_lite_1" name="text_prev" placeholder='text_prev'>{{$task->text_prev}}</textarea>
				{{-- @include('zADMIN._brick.cleanHTML') --}}
			</div>
		</div>
		@endslot

		@slot('tab_2')
		<div class="Article">
			@include('zADMIN._wrap.text.nameTextarea', ['name' => 'text_fix'])
			<div class="paragraph"></div>
			<div class="_shell / Note -lite">
				<textarea id="tinymce_1" name="text_fix" placeholder='text_fix'>{{$task->text_fix}}</textarea>
				{{-- @include('zADMIN._brick.cleanHTML') --}}
			</div>
		</div>
		@endslot

@endcomponent



