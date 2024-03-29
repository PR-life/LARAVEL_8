<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_shema._lego.head.index')
</head>
<body id="body" class="shema-aside MXAT @yield('css-body') @stack('css-body') {{ str_replace('_', '-', app()->getLocale()) }}">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_shema._lego.input')

<div id="Fon" class="Abs -all @stack('css-fon')">@stack('fon')</div>

<?
// $arrCSS = [
// 	'id' => 'Wrap',
// 	'cssOiBar' => 'skimp-size_Aside x-asideClose',
// 	'cssOi' => 'HWin skimp-size_Aside',
// 	'cssASIDE' => 'ASIDE',
// 	'cssKIRA' => 'KIRA -aside'
// ]
?>

@component('_wrap.oiBar', $arrCSS)

	<div class="index relative">
		@stack('topBefore')
		@yield('top')
		@stack('topAfter')

		@yield('Bee')
		@stack('beeAfter')
	
		@stack('contentBefore')
		@yield('content')
	
		@stack('bottomBefore')
		@stack('bottom')
		@stack('bottomAfter')
	</div>

@endcomponent

{{-- @yield('footer')
@stack('footer') --}}

@stack('basementBefore')
@yield('basement')
@stack('basementAfter')

{{-- <div class="FixMenu -mbl / none_PC">
	@include('_._skeleton.menuMobile')
</div> --}}
{{-- @include('zImago._skeleton.menuBeyond') --}}

{{-- @include('_._skeleton.Slump') --}}
{{-- @include('_._skeleton.Geek') --}}

<div id="Milk" class="Abs Milk / @stack('css-milk') / index owlFIX">
	@stack('milk')	
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		@include('_.src.svg._def')
		@stack('svg')
	</svg>
</div>

@include('_._skeleton.Pop')

<div id="Veil" data-click data-foo='click' data-goto></div>


@include('_._skeleton.bodyEnd')
@include('_shema._lego.afterMilk')


</body>
</html>
