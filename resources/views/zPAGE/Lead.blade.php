@extends('zPAGE._shema.INDEX')

@section('content')

{{-- @dd($sms) --}}

<div id="wrap_manager" class="Space -v / relative">
    @include('zTHIS.PAGE.Lead.head')
</div>

<div class="space-m">
    @include('component.Form._brick.Agree', ['cssWrap' => '-Black', 'cssFlex' => 'cC'])
</div>
@endsection