<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_schema._lego.head.index')
	<link href="{{ mix($linkCssMin ?? '/css/lead.css') }}" rel="stylesheet" type="text/css">

    @include('zTHIS.style.Lead')
</head>
<body id="body" class="MXAT @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_schema._lego.input')

<div id="Fon" class="Abs -all index">@stack('fon')</div>

@component('_wrap.index', ['id' => 'Wrap', 'css' => 'HWin'])

    @yield('content')

@endcomponent


<div id="Milk" class="Abs Milk / index owlFIX">
	@stack('milk')
</div>

@include('_._skeleton.bodyEnd')
@include('_schema._lego.afterMilk')

</body>
</html>
