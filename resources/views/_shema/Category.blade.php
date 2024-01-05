<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_shema._lego.head.index')
</head>
<body id="body" class="MXAT Z-category @yield('css-body') @stack('css-body') {{ str_replace('_', '-', app()->getLocale()) }}">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_shema._lego.input')

<div id="Fon" class="Abs -all index">@stack('fon')</div>

@include('_._skeleton.header.Category', $Z ?? [])

@yield('bread')
@stack('bread')

@component('_wrap.oiBar', ['id' => 'Wrap', 'css' => 'HWin'])
	<!-- slot('bar') -->
	<!-- yield('bread') -->

	@stack('topBefore')
	@yield('top')
	@stack('topAfter')

	@stack('contentBefore')
	@yield('content')

	@stack('bottomBefore')
	@stack('bottom')
	@stack('bottomAfter')

@endcomponent


@stack('basementBefore')
@stack('basement')
@stack('basementAfter')

<div class="FixMenu -mbl / none_PC">
	@include('_._skeleton.menuMobile')
</div>
{{-- @include('zImago._skeleton.menuBeyond') --}}

@include('_._skeleton.Slump')
@include('_._skeleton.Geek')

<div id="Milk" class="Abs Milk / index owlFIX">
	<!-- include('_.gaud.Error.index') -->
	<!-- include('_.module.Kontur.index') -->
	<!-- stack('milk') -->
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		@include('_.src.svg.index')
		@stack('svg')
	</svg>
</div>

@include('_._skeleton.bodyEnd')
<!-- <div id="Veil" data-click data-foo='click' data-goto></div> -->

<script async src="{{ mix('/js/app.js') }}"></script>
<script async src="{{ mix('/js/Observer/_observer.js') }}"></script>
<script async src="{{ mix('/js/Observer/visible.js') }}"></script>
@stack('js-bottom-link')

<script>
	@stack('js-bottom')
</script>
@stack('js-bottom-solo')

<!-- <pre id="Rearguard" class="Fix space noEvents Grey / _indexMax" style="top: 0; right:0">Rearguard</pre>
<script src="/js/Rearguard.js"></script> -->
<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(54466420, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54466420" style="position:absolute; left:-9999px;" alt="" /></div></noscript>


</body>
</html>
