@extends('zADMIN._schema.INDEX')
@push('css-body', '-create ')

{{-- @include('_.js.component.tinymce.index') --}}


@push('linkJs')
	{{-- @include('_.src.link.js.text.tinymce') --}}
@endpush

 
@section('Bee')
	<div class="hill-s"></div>
@endsection


{{-- @if (session('UpdateController'))
@push('milk')
	@component('_.component.Message', ['css' => 'eI eC'])
		<div class="content">
			<span class="Grey">Данные обновлены</span>
		</div>
	@endcomponent
@endpush
@endif  --}}



{{-- @section('manager')
    <div class="hill-s"></div>
@endsection --}}

