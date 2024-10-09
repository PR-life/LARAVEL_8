<?
$arrCSS = [
    // 'id' => 'Wrap',
    // 'cssOiBar' => 'skimp-size_Aside x-asideClose',
    // 'cssOi' => 'HWin skimp-size_Aside',
    // 'cssKIRA' => 'KIRA -aside'
]
?>
@extends('_schema.Aside', [
    'preloadCss' => false,
    'linkCssMin' => '/css/minAdmin.css',
    'linkCssApp' => '/css/appAdmin.css',
    // 'cssMilk' => 'skimp-size_Aside5325325'
])

{{-- @push('head',) <base href="http://detectives.su/" /> @endpush --}}
@push('css-body', 'schema-aside 55aside-sticky / skimp-size_Aside / Design x-Admin role-'.auth()->user()->role.' user-id-'.auth()->user()->id.' ')

@section('Fon')
    <div id="Fon" class="Abs -all Fix skimp-size_Aside ">
        @stack('fon')
    </div>
@endsection
@include('zADMIN._schema._brick.src')
{{-- @include('zADMIN._schema._brick.style') --}}
@include('zADMIN.zTHIS._schema.INDEX_')

@push('css-body', 'x-aside Design x-Admin ')
@push('css-fon', 'skimp-size_Aside ')
@push('css-milk', 'skimp-size_Aside ')


@push('oiBar')
    @include('zADMIN._skeleton.Bar.admin')
@endpush

@push('bottomAfter')
    <div class="Plot plot-h -S"></div>
    {{-- <div class="Plot plot-h"></div> --}}
@endpush

@push('svg')
    @include('_.src.svg.admin')
@endpush

@section('pre_wrap')
    @include('zADMIN._skeleton.Top')
@endsection


@push('milk')
    @include('zADMIN._skeleton.Aside.sherpa')

    @if($errors->any())
        @include('zADMIN._skeleton.Message.errors.any')
    @endif
@endpush

{{-- @push('js-bottom-solo')
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(54466420, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54466420" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
@endpush --}}