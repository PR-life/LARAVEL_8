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
	<ul>
		<li><a href="{{route('admin.sherpa.excel.export')}}">export all</a></li>
		{{-- <li><a href="{{route('admin.sherpa.excel.import')}}">import</a></li> --}}
	</ul>


	<div class="Pente aura">
		<div class="Pente-2">
			<h4>Import</h4>
			<div class="paragraph"></div>
			<div class="flex">
				<form class="Form / flex w-100" method="POST" action="{{ route('admin.sherpa.excel.import') }}" enctype="multipart/form-data">
					@csrf
					<div class="_shell w-100 / net">
						<input type="file" name="import_file" />
					</div>
					<button class="orb-s content" type="submit">Go</button>
				</form>
				<div class="Pente-paint"></div>
				<div class="Pente-cross"></div>
			</div>
	
			{{-- <div class="paragraph"></div>
			<div class="content">Model</div>
			<div class="paragraph-s"></div>
			<div class="Bg-dark / space round">
				<ul class="menu -S -block -tag -round -dark / lie cloud">
					@foreach($arrModel as $param)
						<li><a href="{-{ route('admin.excel.import.slug', $param) }}">{{$param}}</a></li>
					@endforeach
				</ul>
			</div> --}}
			{{-- <div class="paragraph"></div>
			<div class="content">Comment</div>
			<div class="paragraph-s"></div>
			<div class="Bg-dark / space round">
				<ul class="menu -S -block -tag -round / lie">
					@foreach($arrComment as $param)
						<li><a href="{-{ route('admin.excel.import.slug', $param) }}">{{$param}}</a></li>
					@endforeach
				</ul>
			</div> --}}
			{{-- <div class="paragraph"></div>
			<div class="content">Pivot</div>
			<div class="paragraph-s"></div>
			<div class="island / space round">
				<ul class="menu -S -block -tag -round / lie">
					@foreach($arrPivot as $param)
						<li><a href="{-{ route('admin.excel.import.slug', $param) }}">{{$param}}</a></li>
					@endforeach
				</ul>
			</div> --}}
		</div>
	</div>






	@endcomponent

@endsection