@extends('_shema.Category')

@section('linkCss')
    @include('zJJ.src.css.min')
    <link href="{{ mix('/css/Design/lite.css') }}" rel="stylesheet" type="text/css">
@endsection

@push('basement')
    @include('zJJ.PAGE.Shema.Tool')
@endpush