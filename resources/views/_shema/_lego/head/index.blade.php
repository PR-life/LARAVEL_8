@include('_.src._head.metaMin')
@include('_.src._head.meta')
    
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<title>@yield('title', 'Заголовок по умолчанию')</title>

@stack('meta')
	@include('_.src._head.link')

<? echo "<style>"?>
@include('_.src.cssMin')
@stack('style')
<? echo "</style>"?>

	<link href="{{ mix($linkCssMin ?? '/css/min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css">
	{{-- <link rel="preload" href="{{ mix($linkCssApp ?? '/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'"> --}}
	<noscript>
		<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css">
	</noscript>

@yield('linkCss')
@stack('linkCss')

@stack('linkJs')
@stack('linkJsAfter')

<script> 
@stack('js-head') 
</script>