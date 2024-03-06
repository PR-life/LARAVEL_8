@extends('zADMIN._shema.edit')

@section('title')edit. Customer - {{$face->name}} @endsection

@include('zADMIN._bd._src.edit.min')


@push('addBread')
<li>
    <a href="{{route('admin.customer.index')}}">
        <span class="content-xs">Клиенты</span>
	</a>
</li>
{{-- <li>
    <span>
        <span class="content-xs">Статьи</span>
    </span>
</li> --}}
@endpush




@section('content')
 
<div class="I aura">
	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.customer.update', $face->id), 'css' => '-customer'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.customer.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.face',['Var'=> $face])
		</div>
 
		{{-- @include('zADMIN/PAGE/Customer/_lego/edit/lego/Relationships') --}}
		{{-- <div class="paragraph"></div> --}}
 


		<div class="Golden -left_60 space-right / wrap-customer">
			<div class="_l / relative index">
				<div class="Abs -all / _bg"></div>
				<div class="relative">
					@include('zADMIN.PAGE.Customer.lego.edit.body')
				</div>
			</div>



			<div class="_r / space">
				<div class="hill"></div>

				{{-- https://rubashkin.su/muzhskie-rubashki/ --}}
				{{-- https://ecco.ru/catalog/500164/02178/ --}}
				@include('zADMIN.PAGE.Customer.lego.edit.right')
			</div>
		</div>


		{{-- @component('zADMIN.PAGE._wrap.Flaber.edit')
			@slot('flaber')
				@include('zADMIN.PAGE.Paper.lego.edit.sms')	
			@endslot --}}
			{{-- <div class="paragraphX2"></div> --}}
			{{-- @include('zADMIN.PAGE.Customer.lego.edit.body') --}}
		{{-- @endcomponent --}}


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')
	@endcomponent 
</div>


@endsection