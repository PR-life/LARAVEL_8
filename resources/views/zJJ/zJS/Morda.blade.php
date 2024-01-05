@extends('zJJ.zJS._shema.index')
@section('title')Javascript @endsection

@push('js-bottom-link')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script> --}}
@endpush

@section('content')
    <div class="hidden / W-100">
        @include('zJJ.PAGE._lego.Wagon.index')
    </div>
@endsection
