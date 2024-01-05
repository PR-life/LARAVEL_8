@extends('zJJ._shema.aside')
@section('title', 'Deep ')
@push('css-body', '-deep ')


@push('aside_10111826')
    @include('zJJ.menu.deep.index')
@endpush




@section('content')
 


<div class="Blog aura [ margin top ]">
	<div class="Paper / Bg -gif / relative index">
		@include('_._brick.img.teaser')
		<div class="Abs -all / hidden">
			<img src="/images-0/_blank/poster.jpg">
		</div>
        <div class="Veil">
            <div class="_bottom"></div>
        </div>
		<div class="Poster -space dC bC / _indexMax">
			<div class="_edge / content-s">Слежение</div>
			<div class="_edge">
				<div class="p">Наружка это легко!</div>
				<div class="h2 b600">Мифы и реальность. Часть 1</div>
			</div>
		</div>
	</div>
</div>
 


<div class="HWin"></div>


@endsection