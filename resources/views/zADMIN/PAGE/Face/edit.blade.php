@extends('zADMIN._shema.edit')

@section('title')edit. Face - {{$face->name}} @endsection

@push('js-bottom-solo')
	@include('decor.JS.ruler')
@endpush

@push('addBread')
    <li>
        <span>
            <span class="content-xs">CRM</span>
        </span>
    </li>
    <li>
        <span>
            <span class="content-xs">Все профили</span>
        </span>
    </li>
@endpush


@section('content')
 
<div class="I aura">
	@component('zADMIN._wrap.form.edit', ['route' => route('admin.crm.face.update', $face->id), 'css' => '-face'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.crm.face.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.face',['Var'=> $face])
		</div>
 

		@component('_wrap.Flaber.admin.edit_customerFS')
			@slot('flaber')
				<div class="Abs -lt -b / js-Ruler / noEvents Selection _indexMin">
					<div class="hill-s"></div>
				</div>
			@endslot
			{{-- @slot('_r') --}}
				{{-- https://rubashkin.su/muzhskie-rubashki/ --}}
				{{-- https://ecco.ru/catalog/500164/02178/ --}}
				{{-- <div class="hill"></div> --}}
				{{-- <div class="void-s space-07031346"> --}}
					{{-- @include('zADMIN.PAGE.zCRM.Customer.lego.edit.right') --}}
					{{-- @include('zADMIN.PAGE.Face.lego.x_14051750') --}}
				{{-- <div class="hill"></div> --}}
			{{-- @endslot --}}
			
			<div class="Abs -all / Bg -grid vol-crm"></div>

			<div class="relative">
				@include('zADMIN.PAGE.zCRM.Customer.lego.edit.body')
			</div>

		@endcomponent

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection