<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@include('_shema._lego.head.index', [
	'linkCssMin' => '/css/minDT.css',
	'linkCssApp' => '/css/appDT.css',
	'linkMetaColor' => 'zAsgrupp._skeleton.meta.color'
	])
	@include('zAsgrupp._skeleton.meta.index')
</head>
<body id="body" class="MXAT noneJs @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>
@include('_shema._lego.input')
@include('_._skeleton.Fon')
@include('zAsgrupp._skeleton.Top')
@include('zAsgrupp._skeleton.header')
@include('zAsgrupp._skeleton.menuBeyond')
@include('zAsgrupp._skeleton.wrap_menuMain')
@yield('breadBack')
@yield('head')
@component('_wrap.oi', ['id' => 'Wrap', 'css' => 'HWin'])
	@yield('bee')
	@stack('topBefore')
	@yield('top')
	@stack('topAfter')
	@yield('bread')
	@stack('contentBefore')
	@yield('content')
	@stack('bottomBefore')
	@stack('bottom')
	@stack('bottomAfter')
@endcomponent

@stack('basementBefore')
@stack('basement')
@stack('basementAfter')

@include('zAsgrupp._skeleton.footer')
@include('zAsgrupp._skeleton.footer_back')

<div id="FixMenu" class="FixMenu -mbl / none_PC">
	@include('zAsgrupp._skeleton.menuMobile')
</div>
 
@include('zAsgrupp._skeleton.Slump')
@include('zAsgrupp._skeleton.Geek')

<div id="Milk" class="Abs Milk / index owlFIX">
	@stack('milk')
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		@include('_.src.svg.zDt')
		@include('zAsgrupp.src.svg.index')
		@stack('svg')
	</svg>
</div>

@include('_._skeleton.Pop')

<div id="Veil" data-click data-foo='click' data-goto></div>

@include('_._skeleton.bodyEnd')
@include('zAsgrupp._shema._lego.afterMilk')
{{-- @include('zTHIS.analytica.add_footer') --}}



</body>
</html>
