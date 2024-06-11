@extends('zDT._shema.SHOW')

@if($item->canonical)
    @section('canonical')
<link href="https://{{Request::getHost()}}{{$item->canonical}}" rel="canonical">
    @endsection
@endif

@push('css-body','item-'.$item->id.' ')

@push('milk')
    @include('zDT.milk.form.ask')
@endpush

@push('fon')
	@include('zDT._brick.fon.show')
@endpush

@push('bread_Asgrupp')
<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="{{route('dt.price')}}" itemprop="item" title="Цены">Цены</a>
    <meta itemprop="name" content="Цены">
    <meta itemprop="position" content="2">
</li>
@isset($category)
<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <a href="{{$category->canonical ?? '/'.$category->slug}}" itemprop="item">{{$category->name_seo ?? $category->name}}</a>
    <meta itemprop="name" content="{{$category->name_seo ?? $category->name}}">
    <meta itemprop="position" content="3">
</li>
@else
@include('zDT._mod.bread.li_category', ['css' => '_prev'])
@endisset
<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
    <span itemprop="name">{{$item->name_tag ?? $item->name}}</span>
    <link itemprop="item" href="{{$item->canonical}}">
    <meta itemprop="position" content="4">
</li>
@endpush

@push('bread_Back')
    @component('_wrap.Bread.li')
        @slot('loop', '2')
        {{-- @slot('css07060748', '_prev') --}}
        @slot('href', route('dt.price'))
        @slot('title', 'Цены на услуги частного детектива')
        @slot('name', 'Цены')
    @endcomponent
    @isset($item->category)
        @component('_wrap.Bread.li')
            @slot('loop', '3')
            @slot('css07060748', '_prev')
            @slot('href', $item->category->canonical ?? '/'.$item->category->slug)
            @slot('title', $item->category->name_seo ?? $item->category->name)
            @slot('name', $item->category->name_tag ?? $item->category->name)
        @endcomponent
    @endisset
    @component('_wrap.Bread.li')
        @slot('loop', '4')
        @slot('name', $item->bread_name ?? $item->name)
    @endcomponent
@endpush

@push('js-bottom')
	@include('zDT.src.js.ScrollLeft')
@endpush