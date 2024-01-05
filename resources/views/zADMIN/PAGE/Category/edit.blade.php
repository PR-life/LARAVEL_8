@extends('zADMIN._shema.edit')

@section('title')edit. Category - {{$category->name}} @endsection



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
        <span class="content-xs">Контент</span>
    </span>
</li>
<li>
    <span>
        <span class="content-xs">Категории</span>
    </span>
</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.category.update', $category->id), 'css' => '-category'])


		@include('zADMIN._brick.bar.v.edit', ['route' => route('admin.category.index', ['shema' => request()->get('shema')])])


		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $category])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

		@slot('flaber')
			@include('zADMIN.PAGE.Category._lego.edit.sms')	
		@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Category._lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection