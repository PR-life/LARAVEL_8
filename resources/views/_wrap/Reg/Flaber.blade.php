<div class="Reg {{$css16101324 ?? 'reg-m80'}} / index">
	<div class="_l W-100 / {{$cssLeft16101324 ?? ''}}">
		<div class="_wrap">
			{!! $slot !!}
		</div>
	</div>
	@component('_wrap.Flaber.index')
		{!! $Flaber !!}
	@endcomponent
	{{ $html_bottom ?? '' }}
</div>