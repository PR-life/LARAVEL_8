<div class="space-l void">
	@include('zADMIN.PAGE.Customer.lego.edit.lego.fio')
</div>
<div class="paragraph"></div>

<div class="space-s">
	<div class="flex">
		@include('zADMIN.PAGE.Customer.lego.edit.brick.param.birthday')		
	</div>
</div>
<div class="hill-s"></div>

@component('zADMIN.PAGE._wrap.Tab.edit.body')
	@slot('nameTab1', 'Контакты')
	@slot('nameTab2', 'Семья')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Customer.lego.edit.lego.tab_data')
		@endslot
		@slot('tab_2')
			@include('zADMIN.PAGE.Customer.lego.edit.lego.tab_family')
		@endslot
@endcomponent

<div class="hill"></div>

@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Блокнот'])
<div class="paragraph"></div>
<div class="_shell Article aura / Note -lite">
	<textarea id="tinymce_lite_1" name="text" placeholder='текст...'>{{$face->note}}</textarea>
</div>
 
<div class="hill-s"></div>