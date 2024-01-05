@extends('zJJ._shema.aside')
@section('title', 'File ')
@push('css-body', '-file ')


@push('aside_10111826')
    @include('zJJ.menu.file.index')
@endpush

@section('content')

<div class="Blog aura void void-l">

    @foreach($fileLib as $param)
      <video autoplay555 muted loop controls>
        <source src="{{str_replace("/home/a/alfamedllc/oogway.store/public", "", $param)}}" type="video/mp4">
      </video>
    @endforeach

</div>


@endsection
