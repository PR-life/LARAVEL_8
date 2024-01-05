<div class="Reg {{$css ?? ''}}">
	<div class="_l W-100 / {{$css_l ?? ''}}">
		{{ $slot }}
	</div>
	@component('_wrap.Flaber.index')
		{{ $Flaber }}
	@endcomponent
	<div class="[ margin top S ]"></div>
	<div class="Grad / _indexMin"></div>
</div>