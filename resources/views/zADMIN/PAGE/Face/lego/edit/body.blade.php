<div class="paragraph"></div>
<div class="flex cross / space-left">
	<a class="Ico -XL ico-20051538 / flex cI cC" href="{{route('admin.plura.face.edit',$face->id)}}">
		<span class="Ico block">
			@svg('pen')
		</span>
	</a>

	<div>
		<div class="h1">{{$face->surname}} {{$face->name}} {{$face->patronymic}}</div>

		<input type="hidden" name="surname" value="{{$face->surname}}">
		<input type="hidden" name="name" value="{{$face->name}}">
		<input type="hidden" name="patronymic" value="{{$face->patronymic}}">

		<div class="paragraphX2"></div>
		<div class="flex">
			@include('zADMIN.PAGE.Face.lego.edit.brick.param.birthday')
		</div>
	</div>
</div>

{{-- <div class="space-l void">
	@include('zADMIN.PAGE.zCRM.Customer.lego.edit.lego.fio')
</div> --}}
<div class="paragraph"></div>


<div class="hill-s"></div>

<div class="space-right">
@component('zADMIN._wrap.Tab.edit.body')
	@slot('nameTab1', 'Контакты')
	@slot('nameTab2', 'Семья')
	@slot('tab_1')
		<div class="paragraphX2 / net"></div>
		@include('zADMIN.PAGE.Face.lego.edit.lego.tab_data')
	@endslot
	@slot('tab_2')
		{{-- @include('zADMIN.PAGE.zCRM.Customer.lego.edit.lego.tab_family') --}}
	@endslot
@endcomponent
</div>
<div class="hill"></div>

@include('zADMIN._wrap.text.nameTextarea', ['name' => 'Блокнот'])

<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="text" placeholder='текст...'>{{$face->note}}</textarea>
</div>
 
<div class="hill-s"></div>