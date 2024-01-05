@extends('_shema.workshop.Aside.index')
@push('css-Oi', 'skimp-size_Aside ')

@section('linkCss')
    @include('zJJ.src.css.min')
    <link href="{{ mix('/css/Design/lite.css') }}" rel="stylesheet" type="text/css">
@endsection



@push('Bar')
    {{-- <div class="I aura">
        <div class="paragraph"></div>
        @include('zLara.menu.Tile.file')
    </div> --}}
    <div class="space">

        <a class="flex" href="https://oogway.store/jj">
        {{-- <a class="flex" href="#" onclick="history.back()"> --}}
            <span class="Ico -long">@svg('arrow-3-left')</span>
        </a>

        <div class="hill"></div>

        @stack('aside_10111826')
    </div>
@endpush


@push('milk')
@include('mod.Kontur.index', ['project' => 'zJJ', 'ico' => 'home'])
@endpush
