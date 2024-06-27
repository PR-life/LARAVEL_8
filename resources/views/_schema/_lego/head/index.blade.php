@include($linkMetaMin ?? '_.head.meta.min')
@include($linkMetaColor ?? '_.head.meta.color')

	<title>@yield('title', $item->title ?? '') @stack('title')</title>
	{{-- <title>@yield('title', $item->title ?? $_ENV['APP_NAME'])</title> --}}
	<meta name="description" content="@yield('description', $item->description ?? '') @stack('description')">
	<meta name="keywords" content="@yield('keywords', $item->keywords ?? '') @stack('keywords')">
	@yield('canonical')
@stack('meta')
@include('_.head.meta.ogp')
@include('_.head.link')
@include('_.head.style')
@include('_.head.css')
@include('_.head.js')