@extends('zADMIN._schema.INDEX')

@push('css-body', 'role-' . auth()->user()->role . '-index ')

@push('topAfter')
    @include('zADMIN.PAGE._lego.manager.top_after')
@endpush
 

@section('Bee')
<div class="Bee / flex dC bC">
	@stack('bee')
</div>
@endsection
