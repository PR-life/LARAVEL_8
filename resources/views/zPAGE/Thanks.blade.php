@extends('zPAGE._schema.INDEX')

@push('metrika_events')
	<script>
		ym({{config('AS.yandex_metrika_id') ?? '54466420'}},'reachGoal','page_thanks');
	</script>
@endpush


@section('content')
	<div id="wrap_manager" class="Space -v / relative index">
		@include('zTHIS.PAGE.Thanks.head')
	</div>

	@include('zTHIS.PAGE.Thanks.footer')
@endsection