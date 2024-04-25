@extends('zPAGE._shema.INDEX')

@section('content')

<div id="wrap_manager" class="Space -v / relative">
    @include('zTHIS.PAGE.Lead.head')
</div>

<div class="space-m">
    @include('component.Form._brick.Agree', ['cssWrap' => '-Black', 'cssFlex' => 'cC'])
</div>



@include('zTHIS._lego.metrika.def')

<script>
    ym({{$_ENV['ym'] ?? '54466420'}},'reachGoal','step_1');
</script>


@endsection