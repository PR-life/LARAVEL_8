@include('_.src._head.metaMin')
@include('_.src._head.meta.color')

	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<title>@yield('title', 'Заголовок по умолчанию 555')</title>
@include('_.src._head.meta.ogp')
@stack('meta')
	@include('_.src._head.link')
<? echo "<style>"?>
@include('_.src.cssMin')
@stack('style')

@media (min-width:800px) and (max-width:8000px){
@stack('style_PC')
}
@media (min-width:799px) and (max-width:1080px){
@stack('style_beyond')
}
@media  screen and (max-width:799px){
@stack('style_mbl')
}

<? echo "</style>"?>


	<link href="{{ mix($linkCssMin ?? '/css/min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css">
	{{-- <link rel="preload" href="{{ mix($linkCssApp ?? '/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript>
		<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css">
	</noscript> --}}

@yield('linkCss')
@stack('linkCss')

@stack('linkJs')
@stack('linkJsAfter')

<script> 
@stack('js-head') 
</script>