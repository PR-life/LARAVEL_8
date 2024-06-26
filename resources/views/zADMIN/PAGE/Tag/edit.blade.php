@extends('zADMIN._schema.edit')

@section('title')edit. Tag - {{$tag->name}} @endsection


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

	@component('zADMIN._wrap.form.edit', ['route' => route('admin.tag.update', $tag->id), 'css' => '-tag'])

		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.tag.index','link_create' => route('admin.tag.create')])


		<div class="_shell / net">
			@include('zADMIN._bd.edit.published',['Var'=> $tag])
		</div>

		@include('zADMIN.PAGE.Tag.lego.edit.lego.Relationships')
		<div class="paragraph"></div>


		@component('_wrap.Flaber.admin.edit')

			@slot('flaber')
				{{-- @include('zADMIN.PAGE.Tag.lego.edit.sms') --}}
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Tag.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection