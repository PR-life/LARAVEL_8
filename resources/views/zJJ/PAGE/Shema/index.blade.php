@extends('zJJ.PAGE.Shema.shema.index')
@section('title', 'Shema ')
@push('css-body', '-shema ')


@push('aside_10111826')
    @include('zJJ.menu.shema.index')
@endpush


@section('content')
    <div class="I aura / Grid x4 -gap / [ margin top ]">
        @include('zJJ.PAGE.Shema._lego.doc.index')
        @include('zJJ.PAGE.Shema._lego.doc.Category')
    </div>

    <div class="hill"></div>
    <div class="hill"></div>
    <div class="hill"></div>
    <div class="hill"></div>
@endsection