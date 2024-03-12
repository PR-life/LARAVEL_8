@extends('zADMIN._shema.edit')

@section('title')edit. Category - {{$category->name}} @endsection


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
	</li>
	<li>
		<a href="{{route('admin.category.index')}}">
			<span class="content-xs">Категории</span>
		</a>
	</li>
@endpush



@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.category.update', $category->id), 'css' => '-category'])


		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.category.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $category])
		</div>

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Category.lego.edit.sms')	
			@endslot

			@slot('date')
				<div class="pl-edgeS"> 
					<dl class="-dot -rightS Void">
						<dt class="content-xs Grey">дата</dt>
						<dd><span class="content-xs">{{$category->created_at}}</span></dd>
					</dl>
				</div>
			@endslot


			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Category.lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection