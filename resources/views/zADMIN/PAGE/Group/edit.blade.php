@extends('zADMIN._shema.edit')

@section('title')edit. Group - {{$group->name}} @endsection

@push('linkCss')
	{{-- @include('_.src.link.css.text.select') --}}
@endpush

@push('linkJsAfter')
	{{-- @include('_.src.link.js.text.select') --}}
@endpush

@push('js-bottom-solo')
	{{-- <script>
		$('#js_categories').select2()
	</script> --}}
@endpush


@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
<li>
    <span>
        <span class="content-xs">Группы</span>
    </span>
</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.group.update', $group->id), 'css' => '-group'])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.group.index', ['shema' => request()->get('shema')])]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.group.index'])

		<div class="_shell">
			@include('zADMIN._bd.edit.published',['Var'=> $group])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				{{-- @include('zADMIN.PAGE.Group.lego.edit.sms')	 --}}
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Group.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection