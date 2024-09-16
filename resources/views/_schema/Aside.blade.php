<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_schema._lego.head.index')
</head>
<body id="body" class="MXAT @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_schema._lego.input')
{{-- @include('_._skeleton.Fon') --}}

@yield('breadBack')
@yield('head')

@component('_wrap.oiBar', ['arrCSS'=>$arrCSS])

	<div class="W-100 / index relative">

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
	</div>

@endcomponent

@stack('basementBefore')
@yield('basement')
@stack('basementAfter')

<div id="FixMenu" class="FixMenu -mbl / none_PC">
	@include('_._skeleton.menuMobile')
</div>

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
@include('_schema._lego.afterMilk')


{{-- @include('_Rearguard.index') --}}
</body>
</html>
