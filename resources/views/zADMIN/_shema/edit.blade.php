@extends('zADMIN._shema.INDEX')
@push('css-body', '-edit ')

@include('_.js.component.tinymce.index')
@include('zADMIN._bd._src.edit.min')

@push('linkJs')
	{{-- @include('_.src.link.js.jquery') --}}
	{{-- @include('_.src.link.js.bootstrap') --}}
	@include('_.src.link.js.text.tinymce')
@endpush

@section('Bee')
<div class="Bee">
	@stack('bee')
</div>
@endsection



@if (session('UpdateController'))
@push('milk')
	@component('_.component.Message', ['css' => 'eI eC'])
		<div class="content">
			<span class="Grey">Данные обновлены</span>
		</div>
	@endcomponent
@endpush
@endif 



@section('manager')
    <div class="hill-s"></div>
@endsection

