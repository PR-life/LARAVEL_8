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

    <div class="hill"></div>

	@component('zADMIN._wrap.index')
	<ul>
		<li><a href="{{route('admin.sherpa.excel.export')}}">admin.sherpa.excel.export</a></li>
	</ul>
		{{-- @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-post'])
			@foreach($posts as $post)
				@include('zADMIN.combine.Teaser.post', ['Var' => $post, 'route' => route('admin.post.edit',$post->id), 'slug' => $data['slug']])
			@endforeach
		@endcomponent
		@include('zADMIN.mod.paginator', ['Var' => $posts]) --}}
	@endcomponent

@endsection