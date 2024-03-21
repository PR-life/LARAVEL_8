@include('_.head.meta.min')
@include('_.head.meta.color')

	<meta name="description" content="@yield('description')">
	<meta name="keywords" content="@yield('keywords')">
	<title>@yield('title', 'Заголовок по умолчанию 555')</title>
	
@include('_.head.meta.ogp')

@include('_.head.link')
@include('_.head.style')
@include('_.head.css')
@include('_.head.js')