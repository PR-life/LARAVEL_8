@extends('zJJ._shema.aside')
@section('title', 'Deep ')
@push('css-body', '-deep ')


@push('aside_10111826')
    @include('zJJ.menu.deep.index')
@endpush




@section('content')

<div class="I aura [ margin top ]">
	<div class="flex">
		@component('_wrap.preview.folder.tildaVideo')
			@slot('link','#')
			@slot('tag','tag')
			@slot('description','description')
			@slot('name','Name <br> Name')
		@endcomponent
	</div>
</div>
 


<div class="HWin"></div>


@endsection