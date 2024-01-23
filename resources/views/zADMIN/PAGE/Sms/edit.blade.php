@extends('zADMIN._shema.edit')

@section('title')edit. Sms - {{$sms->name}} @endsection


@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	@include('_.src.link.js.text.select')
@endpush

@push('js-bottom-solo')
	<script>
		$('#js_tags').select2()
	</script>
@endpush


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Контент</span>
		</span>
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

		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

		@slot('flaber')
			@include('zADMIN.PAGE.Sms._lego.edit.sms')	
		@endslot

		@slot('date')
			<div class="pl-edgeS"> 
				<dl class="-dot -rightS Void">
					<dt class="content-xs Grey">дата</dt>
					<dd><span class="content-xs">{{$sms->created_at}}</span></dd>
				</dl>
			</div>
		@endslot


			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Sms._lego.edit.body')

		@endcomponent




		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection