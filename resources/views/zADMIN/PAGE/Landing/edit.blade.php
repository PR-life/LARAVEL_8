@extends('zADMIN._shema.edit')

@section('title')edit. Landing - {{$landing->name}} @endsection



@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	@include('_.src.link.js.text.select')
@endpush

@push('js-bottom-solo')
	<script>
		$('#js_tags').select2()
	</script>
@endpush


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Target</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Landing</span>
		</span>
	</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.landing.update', $landing->id), 'css' => '-landing'])

		@include('zADMIN._brick.bar.v.edit', ['route' => route('admin.landing.index', ['shema' => request()->get('shema')])])


		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $landing])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

		@slot('flaber')
			@include('zADMIN.PAGE.Landing._lego.edit.sms')	
		@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Landing._lego.edit.body')

		@endcomponent



		<div class="paragraph"></div>
		@include('zADMIN.PAGE._wrap.text.nameTextarea', ['name' => 'Блокнот'])
		<div class="paragraph"></div>
		<div class="_shell Article aura / Note -lite">
			<textarea id="tinymce_lite_2" name="knot_1" placeholder='текст...'>{{$landing->knot_1}}</textarea>
			{{-- @include('zADMIN._brick.cleanHTML') --}}
		</div>


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection