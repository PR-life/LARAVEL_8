@extends('zADMIN._shema.edit')

@section('title')edit. Sms - {{$sms->name}} @endsection


@push('addBread')
	<li>
		<a href="{{route('admin.sms.index')}}">
			<span class="content-xs">Контент</span>
		</a>
	</li>
	<li>
		<span>
			<span class="content-xs">Sms</span>
		</span>
	</li>
@endpush



@section('content')
<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.sms.update', $sms->id), 'css' => '-sms'])


		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.sms.index'])

		<div class="_shell">
			@include('zADMIN._bd.edit.sms',['Var'=> $sms])
		</div>

		@include('zADMIN.PAGE.Sms.lego.edit.lego.Relationships')
		<div class="paragraph"></div>


		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Sms.lego.edit.sms')	
			@endslot

			@slot('date')
				<div class="pl-edgeS / Form -S"> 
					<dl class="-dot -rightS Void">
						<dt class="content-xs Grey">дата</dt>
						<dd>
							<input type="text" name="created_at" value="{{$sms->created_at}}">
						</dd>
					</dl>
				</div>
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Sms.lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection