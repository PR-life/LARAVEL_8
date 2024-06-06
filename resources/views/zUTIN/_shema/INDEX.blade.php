@extends('Utin')

@push('css-body', 'shema-aside')
@push('linkCss')
{{-- rel="preload" --}}
<link href="{{ mix('/css/UTIN.css') }}" type="text/css" rel="stylesheet">
<link href="{{ mix('/css/style.css') }}" type="text/css" rel="stylesheet">
@endpush


@push('js-bottom-solo')
    {{-- @include('_.js.skill.count') --}}
    {{-- @include('_.js.skill.ScrollLeft') --}}
@endpush
@push('js-bottom-link')
    <script src="/lib/js/countUp.js"></script>
@endpush