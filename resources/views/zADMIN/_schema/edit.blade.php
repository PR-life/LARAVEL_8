@extends('zADMIN._schema.INDEX_')
@push('css-body', '-edit ')

@include('zADMIN._bd._src.edit.min')

@include('_.js.component.tinymce.index')

@push('linkJs')
	@include('_.src.link.js.text.tinymce')
@endpush


@section('bee')
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
	<h1>gregregre</h1>
@endsection

