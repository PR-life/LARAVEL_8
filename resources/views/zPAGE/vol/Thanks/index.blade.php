@extends('zPAGE._schema.INDEX')

@include('zPAGE.vol.Thanks.lego.metrika_events')


@section('content')

	<div class="relative">
		<div id="wrap_manager" class="Space -v / relative index">
			@include('zPAGE.vol.Thanks.lego.head')
		</div>
		@include('zTHIS.PAGE.Thanks.footer')
	</div>
	@include('zTHIS.PAGE.Thanks.x_products')

@endsection