@extends('zADMIN._shema.zPlura')

@section('title')данные профиля: {{$face->id}} @endsection

@push('addBread')
	<li>
		<span>
			<span class="content-xs">Plura</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Face</span>
		</span>
	</li>
@endpush

@section('content')
<div class="flex gender-{{$face->gender}} / relative">

	<div class="Flaber / Plura -aside">
		<div class="_flaber">
			<div style="min-height: 102vh"></div>
			<div class="Wings">
				<div class="_win -t">
					<div class="HWin / -Black">
						@include('zADMIN.PAGE.zPlura.lego.face.aside')
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="W-100">
		<div class="paragraph"></div>
		<div class="Plura -edit HWin / space-m">
			@include('zADMIN.PAGE.zPlura.lego.face.content')	
			<div class="HWin"></div>
		</div>
	</div>
</div>


@endsection