@extends('zADMIN._shema.edit')

@section('title')edit. Post - {{$post->name}} @endsection


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
        <span class="content-xs">Материалы</span>
    </span>
</li>
@endpush




@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.post.update', $post->id), 'css' => '-post'])


		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.post.index', ['shema' => request()->get('shema')])]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.post.index'])


		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $post])
		</div>


		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Post._lego.edit.sms')	
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Post._lego.edit.body')

		@endcomponent



		{{-- @component('zADMIN.PAGE._wrap.Reg.edit')
			@slot('Sms')
				@include('zADMIN.PAGE.Category._lego.edit.sms')	
			@endslot
		@endcomponent --}}



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection