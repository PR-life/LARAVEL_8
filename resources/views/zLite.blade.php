<? 
// $Arr = [
// 	'title' => 'Бриф для клиента',
// 	'description' => 'Стратегия продвижения личного бренда | Агентство Life',
// 	'site_name' => 'pr-life.com',
// 	'image' => 'https://dariamushta.pr-life.com/images/ogp.jpg',
// ];

// $ogp = (object) $Arr;
?>
<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_shema._lego.head.index')
	{{-- @include('_shema._lego.head.index', ['ogp' => $ogp]) --}}
</head>
<body id="body" class="MXAT @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_shema._lego.input')

<div id="Fon" class="Abs -lt -r @stack('css-fon')">@stack('fon')</div>

@yield('Top')
@yield('menu')

@yield('breadBack')
@yield('head')

@component('_wrap.index', ['id' => 'Lite', 'css' => $css ?? ''])

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


<div id="Milk" class="Abs Milk / index owlFIX">
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


<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date(); for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }} k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(54466420, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/54466420" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

 </body>
</html>