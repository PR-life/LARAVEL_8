@extends('zUtin')

@push('style')

html {
    --family: var(--family-Inter);
    --bg-selection: pink;
 
    background:#d4d4d7;
}

.bg-white {
    background:#fff;
}

.bg-blue {
    --c-text:#fff;
    background:#42b2fe;
}



ul, ol,
._p,
._h {
    font-family: var(--family-DinPro);
}
 

 
@endpush



@section('linkCss')
    {{-- @include('zDT.src.css.min') --}}
@endsection


@section('title'){{$item->title ?? ''}} @endsection
@section('description'){{$item->description ?? ''}} @endsection
@section('keywords'){{$item->keywords ?? ''}} @endsection


@section('fon')
    <div class="_header">
        <div class="Top -h"></div>
        <div class="Header -h"></div>
    </div>
@endsection


@push('milk')
<div id="milk_menuOverlay" class="FIX" data-click data-css data-toggle='on'>
    <div class="fix / noEvents" data-stopClick>

    </div>
</div>
@endpush