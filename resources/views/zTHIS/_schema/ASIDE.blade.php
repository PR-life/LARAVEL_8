@extends('_schema.Aside', [
    'preloadCss' => false,
])

@section('linkCss')
<link href="{{ mix('/css/appOloid.css') }}" rel="stylesheet">
@endsection

@push('css-body','schema-aside Design ')

 