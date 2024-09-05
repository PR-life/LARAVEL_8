@extends('zPAGE._schema.INDEX')

@push('metrika_events')
	<script>
		ym({{config('AS.yandex_metrika_id') ?? '54466420'}},'reachGoal','LOL');
	</script>
@endpush


@section('content')
	<div class="Pente aura [ padding top bottom ]">
		<div class="text void / center-text">
			<div class="h1">Успешно)</div>
			<div class="inline">
				<a class="Btn cC" href="{{$param['from_page']}}">назад</a>
			</div>
		</div>
	</div>
@endsection
 

