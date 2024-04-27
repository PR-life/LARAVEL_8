@include($linkMetaMin ?? '_.head.meta.min')
@include($linkMetaColor ?? '_.head.meta.color')

	<title>@yield('title', $item->title ?? '')</title>
	{{-- <title>@yield('title', $item->title ?? $_ENV['APP_NAME'])</title> --}}
	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	@yield('canonical')
@include('_.head.meta.ogp')
@stack('meta')
@include('_.head.link')
@include('_.head.style')
@include('_.head.css')
@include('_.head.js')