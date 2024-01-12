@extends('zADMIN._shema.index')
@push('css-body', '-edit ')

@include('_.js.component.tinymce.index')


@push('linkJs')
	@include('_.src.link.js.jquery')
	@include('_.src.link.js.bootstrap')
	@include('_.src.link.js.text.tinymce')
@endpush

{{-- @push('topAfter')
	<div class="Bee"></div>
@endpush --}}



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

