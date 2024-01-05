@extends('zJJ.PAGE.Shema.shema.index')
@section('title', 'Shema ')
@push('css-body', '-shema ')


@push('aside_10111826')
    @include('zJJ.menu.shema.index')
@endpush



@section('content')


<div class="Pente aura">

    @component('_wrap._assembling.PenteSmsFlaber')
        @slot('id','demo_Flaber')
        @slot('cssWrapLeft','x-border space-m')
        @slot('slotSms')
            @include('zJJ.PAGE.Shema._lego.flaber')
        @endslot

        <div class="h1">h1</div>
        <div class="HWin"></div>    
        <div class="HWin"></div>    
    @endcomponent





</div>

    <div class="hill"></div>
    <div class="hill"></div>
    <div class="hill"></div>
    <div class="hill"></div>
@endsection