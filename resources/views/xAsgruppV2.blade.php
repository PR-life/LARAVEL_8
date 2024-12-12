<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('xAsgrupp._schema._lego.head.index', [
		'preloadCss' => false,
		'linkCssMin' => '/css/min-Asgrupp.css',
		'linkCssApp' => '/css/app-Asgrupp.css',
		])
</head>
<body id="body" class="MXAT noneJs @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_schema._lego.input')

@include('_CLOUD.xAsgrupp._skeleton.Fon')
@include('_CLOUD.xAsgrupp._skeleton.Top')
@include('_CLOUD.xAsgrupp._skeleton.v2.logo')
@include('_CLOUD.xAsgrupp._skeleton.menuMain')
@include('_CLOUD.xAsgrupp._skeleton.Header')


@yield('breadBack')
@yield('head')

@component('_wrap.oi')
	@slot('pre_wrap')
		@yield('pre_wrap')
	@endslot
	@include('_wrap.oiBar.index')
@endcomponent

@stack('basementBefore')
@yield('basement')
@stack('basementAfter')


@include('xAsgrupp._skeleton.footer')
@include('xAsgrupp._skeleton.footer_back')


<div id="FixMenu" class="FixMenu -mbl / none_PC">
	@include('xAsgrupp._skeleton.menuMobile')
</div>


@include('_CLOUD.xAsgrupp._skeleton.Slump')
@include('_CLOUD.xAsgrupp._skeleton.Geek')


{{-- @include('xAsgrupp._skeleton.menuMain') --}}
{{-- @include('xAsgrupp._skeleton.Btn') --}}


<div id="Milk" class="Abs Milk / index owlFIX">
	@stack('milk')
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		@include('_.src.svg._def')
		@include('xAsgrupp._src.svg.index')
		@stack('svg')
	</svg>
</div>


@include('_._skeleton.Pop')

<div id="Veil" data-click data-foo='click' data-goto></div>

@include('_._skeleton.bodyEnd')
@include('_schema._lego.afterMilk')

{{-- @if(config('AS.env') == 'production') --}}
{{-- @if (request()->is('*test*'))
    <p>Это тестовая страница</p>
@else
@include('zTHIS.analytica.add_footer')
@endif --}}


{{-- @endif --}}

@stack('metrika_events')


{{-- @include('_Rearguard.index') --}}
</body>
</html>