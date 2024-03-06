@extends('zADMIN._shema.edit')

@section('title')edit. Faq - {{$faq->name}} @endsection


@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	{{-- @include('_.src.link.js.text.select') --}}
@endpush

@push('js-bottom-solo')
	{{-- <script>
		$('#js_tags').select2()
		$('#js_faqs').select2()
	</script> --}}
	@include('_/js/manager/select/index')
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
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.faq.index'])

		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $faq])
		</div>

		@include('zADMIN/PAGE/Faq/_lego/edit/lego/Relationships')

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Faq.lego.edit.sms')	
			@endslot

			@slot('date')
				@include('zADMIN.PAGE.Faq.lego.edit.date')	
			@endslot

			

			<div class="paragraphX2"></div>


			@include('zADMIN.PAGE.Faq.lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection