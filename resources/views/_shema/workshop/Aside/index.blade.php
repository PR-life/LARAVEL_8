@extends('_shema.Aside', ['linkCssMin' => $linkCssMin ?? null, 'linkCssApp' => $linkCssApp ?? null,])


@push('css-body', 'Design')
@push('css-fon', 'skimp-size_Aside Fix')
@push('css-milk', 'skimp-size_Aside')
@push('css-wrap', 'aside2-space-left')

@section('top')
    <div class="hill-m"></div>
@endsection


@push('oiBar')
<div class="Abs -all / design-shadow / hidden noEvents"></div>
@endpush


@push('milk')
{{-- <div id="asideBranch" class="Fix HWin / Aside_2 / Branch" data-localStorage localStorage-id>
    <div class="_wrap / Abs -all"></div>
</div> --}}
@if ($errors->any())
    @component('_.component.Message', ['css' => 'eC -error'])
        @slot('heading')
        ой!
        @endslot
        <ol class="-S">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach 
        </ol>
    @endcomponent
@endif
@endpush

