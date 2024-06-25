@extends('zADMIN._schema.edit')

@section('title')edit. Group - {{$group->name}} @endsection

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

	@component('zADMIN._wrap.form.edit', ['route' => route('admin.group.update', $group->id), 'css' => '-group'])

		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.group.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.published',['Var'=> $group])
		</div>

		
		@component('_wrap.Flaber.admin.edit')

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