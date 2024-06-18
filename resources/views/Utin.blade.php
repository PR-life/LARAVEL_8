<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_schema._lego.head.index')
	{{-- @include('_schema._lego.head.index', ['ogp' => $ogp]) --}}
</head>
<body id="body" class="MXAT noneJs @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>



@include('_schema._lego.input')

<div id="Fon" class="Abs -lt -r @stack('css-fon')">@stack('fon')</div>


{{-- @include('zUTIN.skeleton.Top') --}}
{{-- @include('zUTIN.skeleton.header') --}}
{{-- @include('_._skeleton.menuMain') --}}

@yield('breadBack')
@yield('head')

@component('_wrap.oiBar', ['id' => 'Wrap', 'css' => 'HWin', 'cssOiBar' => 'skimp-size_Aside', 'cssOi' => 'skimp-size_Aside'])

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
@yield('basement')
@stack('basementAfter')

{{-- <div id="FixMenu" class="FixMenu -mbl / none_PC">
	@include('_._skeleton.menuMobile')
</div> --}}
{{-- @include('zImago._skeleton.menuBeyond') --}}

{{-- @include('zUTIN._skeleton.Slump') --}}
{{-- @include('_._skeleton.Geek') --}}

<div id="Milk" class="Abs Milk / index owlFIX">
	<!-- include('_.gaud.Error.index') -->
	<!-- include('_.module.Kontur.index') -->
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
@include('zTHIS.analytica.add_footer')


<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(54466420, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54466420" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

</body>
</html>
