@extends('zADMIN._shema.edit')

@section('title')edit. Tag - {{$tag->name}} @endsection

@include('zADMIN.PAGE.Tag.push.edit')

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

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.tag.index', ['shema' => request()->get('shema')])]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.tag.index'])


		<div class="_shell">
			@include('zADMIN._bd.edit.published',['Var'=> $tag])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Tag.lego.edit.sms')	
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Tag.lego.edit.body')

		@endcomponent


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection