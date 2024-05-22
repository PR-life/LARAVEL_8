@component('zADMIN._bd.edit.wrap.index')
<div id="wrap_21050758" class="flex bC cI / Min -h / W-100">
	<div class="x-checkbox / flex / cross-xxs">
		@include('zADMIN._bd._wrap.Checkbox.beregovoy', ['label' => 'published', 'textLabel' => 'активен', 'active' => $Var->published])
	</div>
	<div class="x-input / flex / cross-xxs">
		@include('zADMIN._bd._lego.edit.right')
	</div>
</div>
@endcomponent