<?
	$linkCssApp = '/css/appTerms.css';
	$arrCSS = [];
?>

@extends('zTHIS._schema.ASIDE.asgrupp')
 
@push('css-body', 'Design schema-aside aside-AR aside-sticky aside-wide / vol-Terms x-Terms / x-Dark / skimp-size_Aside ')
@push('style_mbl')
#body.aside-on #btn_18091147 .Ico{
	display:flex
}
#body.aside-on #btn_18091147 ._burger{
	display:none
}
@endpush

@section('head')
<header id="Top" class="Wings -mbl / edge-s / none_PC Beyond_ARV">
	<div class="_win">
		<div class="Box Edge -PC edge / Header -h / flex bC cI">

			<div class="_left"></div>
			<div class="_right">

				<div id="btn_18091147" class="Burger vol-def" data-click data-node='body' data-css data-toggle='aside-on fix -veil' data-loop data-veil="btn_18091147">
					<div class="_burger">
						<div class="_inner"></div>
					</div>
					<div class="Ico / none">@svg('close')</div>
				</div>
			</div>

			{{-- <div class="_right">
				<div id="btn_17091300" class="Burger vol-def / pointer" 
					data-click data-node='body' data-css data-add='schema-aside aside-on fix -veil' data-loop data-veil="btn_17091301">
					<div class="_burger">
						<div class="_inner"></div>
					</div>
				</div>
				<div id="btn_17091301" class="none / Burger vol-def / pointer" 
					data-click data-node='body' data-css data-remove='schema-aside aside-on fix -veil' data-loop>
					@svg('close')
				</div>
			</div> --}}
		</div>
	</div>
</header>


@endsection

@push('oiBar')
<div class="Scroll_mbl">
    <div class="_scr">
		<div class="Wings none_mbl">
			<div class="_win -t">
				<div class="content Grey / flex cI">
					@svg('arrow-2')
					<a class="ml-2" href="/">на главную</a>
				</div>
			</div>
		</div>
        <div class="paragraphX2"></div>
        <div style="--h-menuMain: 40px">
            <ul id="menu_1509" class="menu -aside">
                <li class="{!! request()->routeIs('fz.privacy') ? 'active' : '' !!}"><a href="{{route('fz.privacy')}}">Политика конфиденциальности</a></li>
                <li class="{!! request()->routeIs('fz.agreement') ? 'active' : '' !!}"><a href="{{route('fz.agreement')}}">Согласие</a></li>
            </ul>
        </div>
    </div>
</div>
@endpush

@section('pre_wrap')
<div class="Bee"></div>
<ol id="Bread" class="Bread Back vol-oblique vol-white control-w / flex / Edge / _indexMax">
    <li class="_prev">
        <a href="/">главная</a>
    </li>
	<li>{{$item->name ?? ''}}</li>
</ol>
@endsection


@section('basement')
<div class="Plot plot-h"></div>
@endsection