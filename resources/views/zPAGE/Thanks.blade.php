<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_shema._lego.head.index')
	<link href="{{ mix($linkCssMin ?? '/css/lead.css') }}" rel="stylesheet" type="text/css">
    @include('zTHIS.style.Lead')
</head>
<body id="body" class="MXAT @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_shema._lego.input')

<div id="Fon" class="Abs -all index">@stack('fon')</div>


@component('_wrap.index', ['id' => 'Wrap', 'css' => 'HWin'])

    <div id="wrap_manager" class="Space -v / relative index">
        @include('zTHIS.PAGE.Thanks.head')
    </div>

    @include('zTHIS.PAGE.Thanks.footer')

@endcomponent






<div id="Milk" class="Abs Milk / index owlFIX">
	@stack('milk')
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		@include('_.src.svg._def')
		@stack('svg')
	</svg>
</div>

@include('_._skeleton.bodyEnd')
<!-- <div id="Veil" data-click data-foo='click' data-goto></div> -->
@include('_shema._lego.afterMilk')

</body>
</html>
