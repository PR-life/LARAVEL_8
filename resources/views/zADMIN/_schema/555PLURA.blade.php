<?
$arrCSS = [
    'id' => 'Wrap',
    'cssOiBar' => 'skimp-size_Aside x-asideClose',
    'cssOi' => 'HWin skimp-size_Aside',
    'cssASIDE' => 'ASIDE',
    'cssKIRA' => 'KIRA -aside'
]
?>
@extends('_schema.Aside', [
    'arrCSS' => $arrCSS,
    'preloadCss' => 'stylesheet',
    'linkCssMin' => '/css/minAdmin.css',
    'linkCssApp' => '/css/appAdmin.css',
    // 'cssMilk' => 'skimp-size_Aside'
])

{{-- @push('head',)
<base href="http://detectives.su/" />
@endpush --}}

@push('css-body', 'asideClose role-'.auth()->user()->role.' ')

@include('zADMIN._schema._brick.src')
@include('zADMIN._schema._brick.style')
@include('zADMIN.zTHIS._schema.INDEX_')

@push('css-body', 'x-aside Design x-Admin ')
@push('css-fon', 'skimp-size_Aside ')
@push('css-milk', 'skimp-size_Aside ')

@push('oiBar')
    @include('zADMIN._skeleton.Bar.admin')
@endpush

@push('bottomAfter')
    <div class="Plot plot-h"></div>
    <div class="Plot plot-h"></div>
@endpush

@push('svg')
    @include('_.src.svg.admin')
@endpush

@section('top')
<div id="Top" class="Top -h / flex bC cI space-left / Goo -t / bg _indexMax">
    <div class="_l">
        <ul class="Bread vol-dot / flex / Grey -c30">
            <li>
                <a href="/admin">
                    <span class="content-xs">Главная</span>
                </a>
            </li>
            @stack('addBread')
        </ul>
    </div>
    <div class="_r / flex cross-xs / edge-rightS_PC">
        @include('zADMIN._skeleton.manager.Top')
    </div>
</div>
@endsection


@push('milk')
    @include('zADMIN._skeleton.Aside.sherpa')

    @if($errors->any())
        @include('zADMIN._skeleton.Message.errors.any')
    @endif
@endpush