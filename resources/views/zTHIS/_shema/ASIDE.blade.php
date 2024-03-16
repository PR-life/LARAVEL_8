<?
    $arrCSS = [
        // 'id' => 'Wrap',
        // 'cssOiBar' => 'skimp-size_Aside x-asideClose',
        'cssOi' => 'HWin skimp-size_Aside',
        // 'cssASIDE' => 'ASIDE',
        'cssKIRA' => '-aside'
    ]
?>

@extends('_shema.Aside', [
    '$arrCSS' => $arrCSS,
    // 'linkCssMin' => '/css/minAdmin.css',
    // 'linkCssApp' => '/css/appAdmin.css',
    // 'cssMilk' => 'skimp-size_Aside'
])

@push('css-body', 'x-aside Design x-Adham ')
{{-- @push('css-fon', 'skimp-size_Aside ') --}}
{{-- @push('css-milk', 'skimp-size_Aside ') --}}



@push('Bar')
    {{-- @include('zADMIN._skeleton.Bar.admin') --}}
@endpush


@push('linkCss')
<link href="{{ mix('/css/appOloid.css') }}" rel="stylesheet" type="text/css">
@endpush