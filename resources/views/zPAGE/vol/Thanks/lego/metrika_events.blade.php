@push('metrika_events')
	<script>
		ym({{config('AS.yandex_metrika_id') ?? '54466420'}},'reachGoal','page_thanks');
	</script>
@endpush