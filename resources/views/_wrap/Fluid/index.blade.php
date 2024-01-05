<div class="Fluid cC {{$css ?? ''}}">
	@if(isset($cssBadge))
	<div class="Wings">
		<div class="_win -t">
			<div class="center-text">
				<div class="inline">
					<div class="Badge {{$cssBadge ?? ''}}">
						<div>evrybo</div> Политика не может не реагировать на звон колоколов
					</div>
				</div>
				<div class="paragraph-s"></div>
			</div>
		</div>
	</div>
	<div class="paragraph-s"></div>
	@endif
	{!!$slot!!}
</div>