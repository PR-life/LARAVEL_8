@if($Var->schema_teaser == 'default' && ($Var->prev_image != '' || $Var->prev_image != null))
<div class="paragraph"></div>
<a class="block edge-s" href="{{$VarRoute}}">
	<div class="inline relative">
		@include('_._brick.img.teaser')
		<div class="Abs -all x-img / flex cC cI / Bg -gif / round-s hidden">
			<img class="H-100" src="{{ asset('storage/' . $Var->prev_image) }}">
		</div>
	</div>
</a>
@endif