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
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.crm.face.index','link_create' => route('admin.crm.face.create')])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.face',['Var'=> $face])
		</div>
 
		 
		@component('_wrap.Flaber.admin.edit_face')
			@slot('before_Flaber')
				<div class="Abs -lt -b / noEvents Selection _indexMax / hidden" style="min-width: 3rem">
					<div class="hill"></div>
					<div class="js-Ruler"></div>
				</div>
			@endslot
			@slot('indent_Flaber')
				<div class="none on" style="min-height: 85vh"></div>
			@endslot
			@slot('flaber')
				@include('zADMIN.PAGE.Face.lego.edit.right'.config('AS.view_switch'))
			@endslot

			<div class="Abs vol-20052023 / Bg -grid vol-crm"></div>
			<div class="relative">
				@include('zADMIN.PAGE.Face.lego.edit.body')
			</div>

		@endcomponent
 

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection