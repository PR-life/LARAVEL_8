@extends('zJJ._shema.aside')
@section('title', 'Hang ')
@push('css-body', '-hang ')


@push('aside_10111826')
    @include('zJJ.menu.hang.index')
@endpush


@include('_.src.link.css.Start')


@section('content')



    <div class="I aura / space [ margin top ]">
        @include('zJJ.mod.Opportunities.index', ['js_id_event' => null])
    </div>
@endsection