<div class="_shell">
	@if($Var->prev_image != '' || $Var->prev_image != null)
		<img class="Max -w3 / Bg -gif" src="{{ asset('storage/' . $Var->prev_image) }}">
		<div class="content-xs">./storage/app/public/{{ $Var->prev_image }}</div>
	@else
		<div class="Max -w3 / relative">
			<div class="Bg -gif">
				@include('_._brick.img.A4_hor')
			</div>
			<div class="Poster -center / White">
				<div class="content">нет фото</div>
			</div>
		</div>
	@endif
</div>
<div class="paragraph"></div>
<div class="_shell">
	<input type="file" name="prev_image">
</div>