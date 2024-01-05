<div class="flex cI / cross-xs / _{{$label}}">
	<label class="content-xs" for="{{$label}}">{{$textLabel ?? $label}}</label>
	<div class="flex cI">
		@component('_._brick.Checkbox.beregovoy', ['css' => $cssCheckbox ?? ''])
			<input id="{{$label}}" type="checkbox" name="{{$label}}" value="1" {{$active ? 'checked' : ''}}>
		@endcomponent
	</div>
</div>