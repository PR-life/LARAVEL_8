@component('zADMIN._bd.edit.wrap.index')
<div class="x-bd / flex bC cI / Min -h / W-100">
	<div class="flex / cross-xxs">
		@include('zADMIN._bd._wrap.Checkbox.beregovoy', ['label' => 'published', 'textLabel' => 'опубликовано', 'active' => $Var->published])
	</div>
	<div class="flex / cross-xxs">
		@include('zADMIN._bd._lego.edit.right')
	</div>
</div>
@endcomponent