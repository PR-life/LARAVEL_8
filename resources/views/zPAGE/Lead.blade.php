@extends('zPAGE._schema.INDEX')


@push('metrika_events')
    <script>
        ym({{config('AS.yandex_metrika_id') ?? '54466420'}},'reachGoal','ask_step_1');
    </script>
@endpush

@section('content')

    <div id="wrap_manager" class="Space -v / relative">
        @include('zTHIS.PAGE.Lead.head')
    </div>

    <div class="space-m">
        @include('component.Form._brick.Agree', ['cssWrap' => '-Black', 'cssFlex' => 'cC'])
    </div>

@endsection