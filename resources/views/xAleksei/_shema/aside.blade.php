<?
$arrCSS = [
	'id' => 'Wrap',
	'cssOiBar' => 'skimp-size_Aside x-asideClose',
	'cssOi' => 'HWin skimp-size_Aside',
	'cssASIDE' => 'ASIDE',
	'cssKIRA' => 'KIRA -aside'
]
?>
@extends('_shema.Aside', $arrCSS)

@section('linkCss')
    <link href="{{ mix('/css/appAleksei.css') }}" rel="stylesheet" type="text/css"> 
@endsection


@push('js-bottom-link')
<script async src="{{ mix('/js/skill/Scroll.js') }}"></script>
@endpush