@include($linkMetaMin ?? '_.head.meta.min')
@include($linkMetaColor ?? '_.head.meta.color')
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<title>@yield('title', $_ENV['APP_NAME'] ?? '')</title>
	{{-- <title>@yield('title', $_ENV['APP_NAME'])</title> --}}
	@yield('canonical')
	
@include('_.head.meta.ogp')

@include('_.head.link')
@include('_.head.style')
@include('_.head.css')
@include('_.head.js')