@extends('zJJ._shema.aside')
@section('title', 'Hang ')
@push('css-body', '-hang ')


@push('aside_10111826')
    @include('zJJ.menu.hang.index')
@endpush


@push('linkCss')
<link rel="preload" href="{{ mix('/css/solo/Start.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
@endpush
@push('noscript_linkCss')
<link href="{{ mix('/css/solo/Start.css') }}" rel="stylesheet" type="text/css">
@endpush


@section('content')



    <div class="I aura / space [ margin top ]">
        @include('zJJ.mod.Opportunities.index', ['js_id_event' => null])
    </div>
@endsection