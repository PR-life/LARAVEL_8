@extends('zLite')
@section('linkCss')
    {{-- <link href="{{ mix('/css/min.css') }}" rel="stylesheet" type="text/css">
    <link rel="preload" href="{{ mix('/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    </noscript> --}}
    <link href="{{ mix('/css/Lite.css') }}" rel="stylesheet" type="text/css">
    {{-- <link href="{{ mix('/css/solo/Brief.css') }}" rel="stylesheet" type="text/css"> --}}
    {{-- <link href="{{ mix('/css/solo/Start.css') }}" rel="stylesheet" type="text/css"> --}}
@endsection
@push('css-body', 'vol-lite ')