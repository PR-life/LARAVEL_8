@extends('zADMIN._shema.index')

@section('title')Excel @endsection
@section('css-body', '-index ')



{{-- @section('manager-left')
	@include('zADMIN.PAGE.Post.lego.managerLeft')
@endsection --}}

{{-- @section('manager-right')
	@include('zADMIN._brick.manager.managerDiv.btnTable')
@endsection --}}


@section('content')


	@component('zADMIN._wrap.index')

	<div class="Wings">
		<div class="_win -t">
			<ul>
				<li><a href="{{route('admin.sherpa.excel.export')}}">export all</a></li>
				{{-- <li><a href="{{route('admin.sherpa.excel.import')}}">import</a></li> --}}
			</ul>
			<div class="paragraph"></div>
		</div>
	</div>




	<div class="Pente aura">
		<div class="Pente-2">
			@include('zADMIN.PAGE.SHERPA.Excel.lego.import')
		</div>
	</div>

	<div class="hill"></div>

	<div class="Pente aura">
		<div class="Pente-2">
			@include('zADMIN.PAGE.SHERPA.Excel.lego.update')
		</div>
	</div>

	<div class="hill"></div>

	<div class="Pente aura">
		<div class="Pente-2">
			@include('zADMIN.PAGE.SHERPA.Excel.lego.download')
		</div>
	</div>

	@endcomponent

@endsection