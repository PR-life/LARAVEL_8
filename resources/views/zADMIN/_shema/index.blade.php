@extends('zADMIN._shema.INDEX')

@push('css-body', '-index ')

@push('topAfter')
    @include('zADMIN.PAGE._lego.manager.top_after')
@endpush
 

@section('Bee')
<div class="Bee / flex dC bC">
	@stack('bee')
</div>
@endsection
