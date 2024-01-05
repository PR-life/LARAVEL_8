<div id="wrapLang_{{$id}}" class="_shell / index {{$cssWrap ?? ''}} / Lang OnOff off" data-click data-toggle="on" data-localstorage localstorage-id>
	@include('zADMIN._brick.manager.edit.changeLang')
	<div class="{{$css ?? 'void-m'}}" data-stopClick>
		{!!$slot!!}
	</div>
</div>