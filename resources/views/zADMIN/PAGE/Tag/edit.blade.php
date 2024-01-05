@extends('zADMIN._shema.edit')

@section('title')edit. Tag - {{$tag->name}} @endsection

@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	@include('_.src.link.js.text.select')
@endpush

@push('js-bottom-solo')
	<script>
		$('#js_categories').select2()
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
        <span class="content-xs">Теги</span>
    </span>
</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.tag.update', $tag->id), 'css' => '-tag'])

		@include('zADMIN._brick.bar.v.edit', ['route' => route('admin.tag.index', ['shema' => request()->get('shema')])])


		<div class="_shell">
			@include('zADMIN._bd.edit.min',['Var'=> $tag])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Tag._lego.edit.sms')	
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Tag._lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection