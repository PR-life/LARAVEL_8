@extends('zADMIN._shema.edit')

@section('title')edit. Paper - {{$paper->name}} @endsection


@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	{{-- @include('_.src.link.js.text.select') --}}
@endpush

@push('js-bottom-solo')
	{{-- <script>
		$('#js_tags').select2()
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
        <span class="content-xs">Статьи</span>
    </span>
</li>
@endpush




@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.paper.update', $paper->id), 'css' => '-paper'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.paper.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $paper])
		</div>
 
		@include('zADMIN/PAGE/Paper/_lego/edit/lego/Relationships')

 

		<div class="paragraph"></div>
 


		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Paper._lego.edit.sms')	
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Paper._lego.edit.body')

		@endcomponent



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')
	@endcomponent 
</div>


@endsection