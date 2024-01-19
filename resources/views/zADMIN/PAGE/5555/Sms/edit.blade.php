@extends('zADMIN._shema.edit')

@section('title')edit. Sms - {{$sms->name}} @endsection


@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.sms.update', $sms->id), 'css' => '-sms'])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.sms.index')]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.sms.index'])


		<div class="_shell">
			@include('zADMIN._bd.edit.sms',['Var'=> $sms])
		</div>

		@if($sms->label == 'callback')
		<div class="paragraphX2"></div>
		<div class="Wings">
			<div class="_win -t">
				<div class="flex / menu -tile -S x-09081236 / cross-xs">
					@include('zADMIN.PAGE._brick.form.status.200', ['Var' => $sms->status])
					{{-- @include('zADMIN.PAGE._brick.form.status.404', ['Var' => $sms->status]) --}}
					{{-- @include('zADMIN.PAGE._brick.form.go_page_sms', ['Var' => $sms->published]) --}}
				</div>
			</div>
		</div>
		<div class="paragraph"></div>
		@endif


		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Sms._lego.edit.sms')	
			@endslot

			@component('zADMIN.PAGE._wrap.tollsFirst')
				@if($sms->label != 'callback')
				<div class="flex / menu -tile -S x-09081236 / cross-xs">
					@include('zADMIN.PAGE._brick.form.go_mod_talk', ['Var' => $sms->go_mod_talk])
					@include('zADMIN.PAGE._brick.form.go_page_sms', ['Var' => $sms->published])
				</div>
				@endif
				@if($sms->label == 'callback')
				<div class="space">
					<div class="h2 Grey">{{$sms->name}}</div>
					<div class="paragraph"></div>
					<div class="h1 / b600 Phone">{{$sms->phone}}</div>
				</div>
				@endif
			@endcomponent

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Sms._lego.edit.body')	

		@endcomponent



		{{-- @component('zADMIN.PAGE._wrap.Reg.edit')
			@slot('Sms')
				@include('zADMIN.PAGE.Sms._lego.edit.sms')	
			@endslot


			
 


		@endcomponent --}}



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection