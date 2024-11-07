<div id="{{$id ?? 'Slider'}}" class="Slider jsSlider / index {!!$css28061029 ?? '-move / relative'!!}" data-current='1'>

	{!!$img ?? ''!!}
 	{!!$manager ?? ""!!}
	{!!$package ?? ""!!}
	
	<form class="Shell / {!!$cssShell ?? '_indexMin'!!} / hidden" method="POST" action="{{route($route ?? 'sms.storeask')}}" enctype="multipart/form-data">
		@csrf
		@include('component.Form._brick.input.bd_min')
		@include('component.Form._brick.input.spam')
		{!!$params ?? ""!!}
		<div class="Track / {!!$cssTrack ?? '-solo'!!}">
			{{$slot}}
		</div>
		<div class="Abs Loki ghost / sherpaSlider"></div>
	</form>
</div>

{{-- <div id="{{$id ?? 'Slider'}}" class="Slider / index {!!$css28061029 ?? '-move / relative'!!}" data-current="1" itemscope itemtype="https://schema.org/ImageGallery">
	<meta itemprop="name" content="слайдер">
	{!!$Img ?? ''!!}
 	{!!$manager ?? ""!!}
	{!!$package ?? ""!!}
	
	<form class="Shell / {!!$cssShell ?? '_indexMin'!!} / hidden" method="POST" action="{{route($route ?? 'sms.storeask')}}" enctype="multipart/form-data">
		@csrf
		@include('component.Form._brick.input.bd_min')
		@include('component.Form._brick.input.spam')
		<input type="hidden" name="label" value="ask">
		<input type="hidden" name="reachgoal_id" value="999999999956846846">

		<div class="Track / {!!$cssTrack ?? ''!!}" style="transform: translateX(0px);" data-switch>
			{{$slot}}
		</div>
		<div class="Abs Loki ghost / sherpaSlider"></div>
	</form>
</div> --}}