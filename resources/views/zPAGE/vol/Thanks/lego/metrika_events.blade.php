@push('metrika_events')
	<script>
		ym({{config('AS.yandex_metrika_id') ?? '54466420'}},'reachGoal','page_thanks');
		@isset($sms->reachgoal_id)
		ym({{config('AS.yandex_metrika_id') ?? '54466420'}},'reachGoal','{{$sms->reachgoal_id}}');
		@else
		ym({{config('AS.yandex_metrika_id') ?? '54466420'}},'reachGoal','formAll');
		@endisset
	</script>
@endpush