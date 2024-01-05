<div class="x-bd / flex bC cI / Min -h / W-100">
	<div class="flex / cross-xxs">
		@include('zADMIN._bd._wrap.Checkbox.beregovoy', ['label' => 'mafia', 'textLabel' => 'проверено', 'active' => $Var->published])
		{{-- @include('zADMIN._bd._wrap.Checkbox.beregovoy', ['label' => 'featured', 'textLabel' => 'популярное', 'active' => $Var->featured])	 --}}
	</div>
	<div class="flex / cross-xxs">
		@include('zADMIN._bd._lego.edit.right')
	</div>
</div>