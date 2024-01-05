@extends('zADMIN._shema.edit')

@section('title')edit. Faq - {{$faq->name}} @endsection



@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	@include('_.src.link.js.text.select')
@endpush

@push('js-bottom-solo')
	<script>
		$('#js_tags').select2()
		$('#js_faqs').select2()
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
        <span class="content-xs">FAQ</span>
    </span>
</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.faq.update', $faq->id), 'css' => '-faq'])


		@include('zADMIN._brick.bar.v.edit', ['route' => route('admin.faq.index', [
			'shema' => request()->get('shema'),
			'tag_id' => request()->get('tag_id'),
			'page' => request()->get('page'),
			'category_id' => request()->get('category_id'),
			'tag_id' => request()->get('tag_id')
			])])



		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $faq])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

		@slot('flaber')
			@include('zADMIN.PAGE.Faq._lego.edit.sms')	
		@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Faq._lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection