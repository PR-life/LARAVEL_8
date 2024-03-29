<?
    $arrCSS = [
        'id' => 'Wrap',
        'cssOiBar' => 'skimp-size_Aside x-asideClose',
        'cssOi' => 'HWin skimp-size_Aside',
        'cssASIDE' => 'ASIDE',
        'cssKIRA' => 'KIRA -aside'
    ]
?>

@extends('_shema.Aside', [
    '$arrCSS' => $arrCSS,
    'linkCssMin' => '/css/minAdmin.css',
    'linkCssApp' => '/css/appAdmin.css',
    'cssMilk' => 'skimp-size_Aside'
])

@push('head',)
<base href="http://detectives.su/" />
@endpush

@push('css-body', 'role-'.auth()->user()->role.' ')

@include('zADMIN._shema._brick.src')
@include('zADMIN._shema._brick.style')
@include('zADMIN.zTHIS.index')


@push('css-body', 'x-aside Design x-Admin ')
@push('css-fon', 'skimp-size_Aside ')
@push('css-milk', 'skimp-size_Aside ')





@push('oiBar')
    @include('zADMIN._skeleton.Bar.admin')
@endpush


@push('bottomAfter')
    <div class="Plot -h"></div>
    <div class="Plot -h"></div>
@endpush

{{-- @push('svg')
    @include('_.src.svg.admin')
@endpush --}}




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
    <div class="_r / flex cross-xs / edge-right_SPC">
        @include('zADMIN._skeleton.manager.Top')
    </div>
</div>
@endsection


@push('milk')

<div id="milkSherpa" class="Aside_2 -menu x-asideClose / HWin / index relative" data-click data-css data-toggle='On Fix'>
    <div class="Abs -rt / Close -white / _indexMax" data-close></div>
    <div class="_wrap / Abs -all" data-stopClick>
        
        <div class="hill"></div>
        <div class="Jolt -r">


            <a class="Chunk cI pr-2" href="/admin/sherpa/excel">
                <div class="_ico / flex eC / Pr -x4">
                    <div class="Ico -S">
                        <svg fill="currentColor" stroke="none" viewBox="0 0 16 16"><path d="m12.73 3.32-2.05-2.05A1.74 1.74 0 0 0 9.45.75H4.5c-.98 0-1.75.8-1.75 1.75V13c0 .98.77 1.75 1.75 1.75h7c.96 0 1.75-.77 1.75-1.75V4.55c0-.46-.2-.9-.52-1.23Zm-.8 9.68c0 .25-.21.44-.43.44h-7a.43.43 0 0 1-.44-.44V2.53c0-.25.2-.44.44-.44h4.38v2.16c0 .5.38.88.87.88h2.16V13h.03ZM5.39 8.4c0 .39.27.66.65.66h3.94c.35 0 .65-.27.65-.65 0-.36-.3-.66-.65-.66H6.03c-.38 0-.66.3-.66.66Zm4.59 1.97H6.03c-.38 0-.66.3-.66.66 0 .38.28.66.66.66h3.94c.35 0 .65-.28.65-.66 0-.35-.3-.65-.65-.65Z"></path></svg>
                    </div>
                </div>
                <div class="_item chunk-100_Ico round-s">
                    <span class="content-s / slctn pointer">Excel</span>         
                </div>
            </a>

            
        </div>
    </div>
</div>


@if($errors->any())
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